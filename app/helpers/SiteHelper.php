<?php

namespace helpers;

class SiteHelper
{
    /**
     * returns an image path
     * @param string $file
     * @param string $folder
     * @param string $default
     * @return string
     */
    public function getSource(string $file, string $folder = 'general', string $default = 'default.jpg'): string
    {
        if (file_exists('assets/images/' . $folder . '/' . $default)) {
            // return default file with custom folder
            $saveImage = 'assets/images/' . $folder . '/' . $default;
        } else {
            // return most default file
            $saveImage = 'assets/images/backgrounds/default.jpg';
        }

        // file empty?
        if (empty($file)) {

            // return save default file
            return $saveImage;
        }

        // check if type exists
        if (file_exists('assets/images/' . $folder . '/' . $file)) {
            return 'assets/images/' . $folder . '/' . $file;
        }

        return $saveImage;
    }
}