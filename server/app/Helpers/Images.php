<?php
/*
 *
 * *
 * * *
 * * * *
 * * * * *
 * Morteza Goodarzi *
 * 1400/05/24
 * * * * *
 * * * *
 * * *
 * *
 *
 */
namespace App\Helpers;

use Carbon\Carbon;
use Intervention\Image\Facades\Image as ImageFacade;

class Images
{
    public function uploadFile($request, $inputName ,$path): string
    {
        $fileName = $this->createFileName($request, $inputName , $path);
        $defaultPath = public_path(str_replace("/",DIRECTORY_SEPARATOR,$path)).DIRECTORY_SEPARATOR."default".DIRECTORY_SEPARATOR;
		$defaultPath = str_replace("/local/public","",$defaultPath);

        $smallPath = public_path(str_replace("/",DIRECTORY_SEPARATOR,$path)).DIRECTORY_SEPARATOR."sm".DIRECTORY_SEPARATOR;
		$smallPath = str_replace("/local/public","",$smallPath);

        $mediumPath = public_path(str_replace("/",DIRECTORY_SEPARATOR,$path)).DIRECTORY_SEPARATOR."md".DIRECTORY_SEPARATOR;
		$mediumPath = str_replace("/local/public","",$mediumPath);

        $largePath = public_path(str_replace("/",DIRECTORY_SEPARATOR,$path)).DIRECTORY_SEPARATOR."lg".DIRECTORY_SEPARATOR;
		$largePath = str_replace("/local/public","",$largePath);

        $this->uploadDefault($request, $inputName , $defaultPath,$fileName);
        $this->uploadSmall($request, $inputName,$smallPath,$fileName);
        $this->uploadMedium($request, $inputName,$mediumPath,$fileName);
        $this->uploadLarge($request, $inputName,$largePath,$fileName);
        return $fileName;
    }

    public function createFileName($request, $inputName , $path):string
    {
        $fileName = explode(".", $request->file($inputName)->getClientOriginalName())[0] . "." . $request->file($inputName)->extension();
        if(file_exists(public_path($path.DIRECTORY_SEPARATOR."default".DIRECTORY_SEPARATOR.$fileName))){
            $fileName = explode(".", $request->file($inputName)->getClientOriginalName())[0] . Carbon::now()->toArray()["timestamp"] . "." . $request->file($inputName)->extension();
        }
        return $fileName;
    }

    public function uploadDefault($request, $inputName , $path,$fileName):string
    {
        $this->makeDirectoryIfExist($path);
        $img = ImageFacade::make($request->file($inputName)->path());
        $img->save($path.$fileName);
        // with watermark:
        // ->insert(public_path("theme/sofbox-v4/images/watermark.png"),"bottom-right",0,0)
        return true;
    }

    public function uploadSmall($request, $inputName , $path,$fileName):string
    {
        $this->makeDirectoryIfExist($path);
        $img = ImageFacade::make($request->file($inputName)->path());
        $img->resize(110, 110, function ($const) {
            $const->aspectRatio();
        })->save($path.$fileName);
        return true;
    }
    public function uploadMedium($request, $inputName , $path,$fileName):string
    {
        $this->makeDirectoryIfExist($path);
        $img = ImageFacade::make($request->file($inputName)->path());
        $img->resize(300, 300, function ($const) {
            $const->aspectRatio();
        })->save($path.$fileName);
        return true;
    }
    public function uploadLarge($request, $inputName , $path,$fileName):string
    {
        $this->makeDirectoryIfExist($path);
        $img = ImageFacade::make($request->file($inputName)->path());
        $img->resize(500, 500, function ($const) {
            $const->aspectRatio();
        })->save($path.$fileName);
        // with watermark:
        // ->insert(public_path("theme/sofbox-v4/images/watermark.png"),"bottom-right",0,0)
        return true;
    }

    public function makeDirectoryIfExist(string $path)
    {
        if (!file_exists($path)) {
            mkdir($path, 0755, true);
        }
    }
    public function deleteFile($filePlace, $fileName)
    {
        $fileUrlDefault = public_path($filePlace ."/default/". $fileName);
        $fileUrlLarge = public_path($filePlace ."/lg/". $fileName);
        $fileUrlMedium = public_path($filePlace ."/md/". $fileName);
        $fileUrlSmall = public_path($filePlace ."/sm/". $fileName);
        @unlink($fileUrlDefault);
        @unlink($fileUrlLarge);
        @unlink($fileUrlMedium);
        @unlink($fileUrlSmall);
    }
    public function deleteFileLogo($filePlace, $fileName)
    {
        $fileUrlDefault = $filePlace ."/". $fileName;
        @unlink($fileUrlDefault);
    }
    public function uploadFileLogo($request, $inputName ,$path): string
    {
        $fileName = $this->createFileName($request, $inputName , $path);
        $defaultPath = public_path(str_replace("/",DIRECTORY_SEPARATOR,$path)).DIRECTORY_SEPARATOR."".DIRECTORY_SEPARATOR;
        $this->uploadDefault($request, $inputName , $defaultPath,$fileName);
        return $fileName;
    }
    public function uploadSingleFile($gallery, $path,$fileName):string
    {
        $this->makeDirectoryIfExist($path);
        $img = ImageFacade::make($gallery->path());
        $img->save($path.$fileName);
        // with watermark:
        // ->insert(public_path("theme/sofbox-v4/images/watermark.png"),"bottom-right",0,0)
        return true;
    }
}
