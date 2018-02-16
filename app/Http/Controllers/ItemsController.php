<?php
namespace App\Http\Controllers;

class ItemsController extends Controller {

    public function get() {
        list($available, $code) = $this->curl('get_available', 'GET');
        list($not_available, $code) = $this->curl('get_not_available', 'GET');
        list($get_more_five, $code) = $this->curl('get_more_five', 'GET');
        return view('items')->
                with('available_items', $available)->
                with('not_available_items', $not_available)->
                with('five_more_items', $get_more_five);
    }

    public function add() {
        return view('item_add');
    }

    public function addSave() {
        $inputs = request()->only('name', 'amount');
        list($item, $code) = $this->curl('add', 'POST', $inputs);
        return redirect()->route('items');
    }

    public function edit($id) {
        list($item, $code) = $this->curl('get_item/' . $id, 'GET');
        return view('item_edit')->with('item', $item);
    }

    public function editSave($id) {
        $inputs = request()->only('name', 'amount');
        list($item, $code) = $this->curl('edit/' . $id, 'PUT', $inputs);
        return redirect()->route('items');
    }

    public function remove($id) {
        $this->curl('delete/' . $id, 'DELETE');
        return redirect()->route('items');
    }

    private function curl($url, $method, $inputs = false) {
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, config('site.api_address') . $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, $method);
        if ($inputs) {
            curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($inputs));
        }
        $output = curl_exec($ch);
        $http_code = curl_getinfo($ch, CURLINFO_HTTP_CODE);
        return [json_decode($output), $http_code];
    }
}
