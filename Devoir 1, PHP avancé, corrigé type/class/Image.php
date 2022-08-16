<?php

class Image {

    //recuper le non des sous repertoir.
    public function nameSubdir($name) {
        // suppression des 8 derniers caractères de $name
        return substr($name, 0, -8);
    }

    // un sous dossier
    public function createSubdir($image_dir, $subdir_list) {
        $subdirs = array_unique($subdir_list);
        foreach ($subdirs as $subdir) {
            if(!is_dir($image_dir . $subdir)) {
                // création du répertoire
                mkdir($image_dir . $subdir, 0755);
            }
        }
        return $subdirs;
    }


    public function moveImage($image_dir, $image_list, $subdir_list) {
        foreach ($image_list as $image) {
            $serie = $this->nameSubdir($image);
            if (in_array($serie, $subdir_list)) {
                if(is_dir($image_dir . $serie .'/')) {
                    rename($image_dir . $image, $image_dir . $serie . '/' . $image);
                }
            }
        }
    }

    //lir le contenue dun dosier
    public function parseDir($image_dir) {
        if ($handle = opendir($image_dir)) {
            while (false !== ($file = readdir($handle))) {
                if ($file != "." AND $file != "..") {
                    if(is_file($image_dir . $file)) {
                        $image_list[] = $file;
                        $subdir_list[] = $this->nameSubdir($file);
                    } elseif(is_dir($image_dir . $file)) {
                        $subdir_list[] = $file;
                    }
                }
            }
            closedir($handle);
        }
        if(!isset($image_list)) {
            $image_list = null;
            $subdir_list = null;
        }
        // retourne liste des images et sous-répertoires
        return ['image_list' => $image_list , 'subdir_list' => $subdir_list]; // retourne
    }
}
