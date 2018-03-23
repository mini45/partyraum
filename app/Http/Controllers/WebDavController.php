<?php

namespace App\Http\Controllers;

use GrahamCampbell\Flysystem\Facades\Flysystem;
use Illuminate\Http\Request;
use League\Flysystem\WebDAV\WebDAVAdapter;
use Library\Sabre\Dav\Client;

class WebDavController extends Controller
{
    public function test()
    {
        $settings = array(
            'baseUri' => 'https://cloud.btcwash.de/remote.php/webdav/',
            'userName' => '',
            'password' => '',
        );

        $client = new Client($settings);
//        $x = $client->propfind('',[],1);
        $x = $client->propfind('Photos/',[],1);


//        $x = $client->request('GET','file.txt');//reead file

//        $x = $client->request('GET','Nextcloud.mp4');//reead file
        dd($x);
    }




}