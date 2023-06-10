<?php

namespace App\Http\Controllers\database;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Response;
use Illuminate\View\View;
use League\Csv\Writer;

class queryBuilder extends Controller

{
    public function index(): View
    {
        $users = DB::table('users')->get();

        return view('database.queryBuilder', ['users' => $users]);
    }

    public function getData(string $type): View
    {
        if ($type === 'all-rows') {
            $data = DB::table('users')->get();
            return view('database.queryBuilder', ['data' => $data, 'type' => $type]);
        } elseif ($type === 'single-row') {
            $data = DB::table('users')->where('name', 'user 10')->first();
            return view('database.queryBuilder', ['data' => $data, 'type' => $type]);
        } elseif ($type === 'column-values') {
            $data = DB::table('users')->pluck('email');
            return view('database.queryBuilder', ['data' => $data, 'type' => $type]);
        }

        // Return the default view here
        return view('database.queryBuilder');
    }

        public function chunkingResults(): View
    {
            $data = collect([]);
        DB::table('users')->orderBy('id')->chunk(30, function (Collection $users) use ($data) {
            $data = $data->concat($users->pluck('name'));
        });

        return view('database.chunkingResults', ['data' => $data]);
    }


    public function exportUsersToCsv()
    {
        $headers = ['Name', 'Email'];

        // Create a stream to write the CSV data
        $stream = fopen('php://temp', 'w');
        $csv = Writer::createFromStream($stream);
        $csv->insertOne($headers);

        // Retrieve the user data and stream it to the CSV file
        DB::table('users')->orderBy('id')->chunk(100, function ($users) use ($csv) {
            foreach ($users as $user) {
                $csv->insertOne([$user->name, $user->email]);
            }
        });

        // Set the response headers
        $response = Response::make(stream_get_contents($stream));
        $response->header('Content-Type', 'text/csv');
        $response->header('Content-Disposition', 'attachment; filename=users.csv');

        // Close the stream
        fclose($stream);

        return $response;
    }

    public function aggregates(){
        $totalRecords = DB::table('users')->count();
        $id = DB::table('users')->max('id');
        $users  = DB::table('users')->min('name');
        $emails = DB::table('users')->avg('email');

        return view('database.aggregates', compact('totalRecords', 'id', 'users', 'emails'));
    }
}
