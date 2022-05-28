<?php

namespace App\Http\Controllers;

use File;
use Illuminate\Http\Request;

/**
 * @group Authentication
 *
 * API endpoints for managing files
 */
class FileSystemController extends Controller
{

    /**
     * Read File
     *
     * @queryParam   url    string  required  Example: auth.log
     *
     * @response {
     *      "May 23 12:09:01 abdelaziz CRON[1412]: pam_unix(cron:session): session opened for user root by (uid=0)",
     *       "May 23 12:09:01 abdelaziz CRON[1412]: pam_unix(cron:session): session closed for user root"
     * }
     */
    public function readFile(Request $request)
    {
        $skip = ($request->has('skip')) ? $request->skip : 0;
        $directoryPath = '/var/log/'.$request->url;
        if (File::exists($directoryPath)) {
            $file = \File::get('/var/log/'.$request->url);
            $collect = collect(explode("\n", $file));
            if ($request->has('paginate_first')) {
                $skip = 0;
            }
            if ($request->has('paginate_end')) {
                $skip = $collect->count() - 10;
            }
            $collect = $collect->take(10)->skip($skip)->all();
            return array_values($collect);
        }
        return 'file not exists';
    }
}
