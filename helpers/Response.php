<?php

class Response {
    public static function json($data, $success = true) {
        return [
            "success" => $success,
            "data" => $data
        ];
    }
}
