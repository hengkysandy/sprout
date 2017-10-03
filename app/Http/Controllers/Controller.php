<?php

namespace App\Http\Controllers;

use App\CloudinaryMapping;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use JD\Cloudder\Facades\Cloudder;



class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function cloudinaryMaskingFile($documentFile) {
    	$maskingFile = file_get_contents('images/masking.png');
        $images = file_get_contents($documentFile->path());
        $originalName = $documentFile->getClientOriginalName();

        $newPath = 'cache/'.strtotime(date('c')).'.'.$originalName.'.png';
        $newMaskedFile = $maskingFile."".$images;
        file_put_contents($newPath, $newMaskedFile);
        $response = Cloudder::upload(public_path()."/".$newPath)->getResult();
        $imageURL = $response['url'];
        unlink($newPath);

        $cm = new CloudinaryMapping();
        $cm->url = $response['url'];
        $cm->original_filename = $originalName;
        $cm->save();

        return $imageURL;
    }
}
