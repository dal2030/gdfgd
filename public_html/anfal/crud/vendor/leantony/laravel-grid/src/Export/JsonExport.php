<?php
/**
 * Copyright (c) 2018.
 * @author Antony [leantony] Chacha
 */

namespace Leantony\Grid\Export;

use Illuminate\Support\Collection;

class JsonExport implements GridExportInterface
{
    /**
     * Export data from the grid
     *
     * @param Collection $data
     * @param array $args
     * @return mixed
     */
    public function export($data, array $args)
    {
        $fileName = $args['fileName'];



        $headers = [
            'Content-Disposition' => 'attachment; filename='. $fileName . '.json',
        ];
        return response()->stream(function () use ($data) {
            echo $data->toJson(JSON_PRETTY_PRINT);
        }, 200, $headers);

        
    }
}