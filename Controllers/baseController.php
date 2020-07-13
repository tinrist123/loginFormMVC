<?php

class Controllers_baseController
{
    const VIEW_FOLDER_NAME = 'Views/';

    public function redirectView($path, $data = [])
    {
        if ($data)
            foreach ($data as $key => $value) {
                $$key = $value;
            }
        return require_once(self::VIEW_FOLDER_NAME . str_replace(".", '/', $path) . ".php");
    }
}
