<?php

    $alemanes = [
                'Mercedes Benz',
                'BMW',
                3 => 'Volkswagen',
                'Audi',
                10 => 'Opel',
                'Porsche',
                'RUF',
                'Daimler'
                ];
    echo $alemanes[3];
    echo '<pre>';
    print_r( $alemanes );
    echo '</pre>';
    //php_out
    echo '<br>';
    $celulares = [
                    'Samsung' => 'S10',
                    'Motorola' => 'G4',
                    'iPhone' => 'X12',
                    'Xiami' => 'MI9',
                    'Huawei' => 'Prolite'
                ];
    echo $celulares[ 'Motorola' ];
    echo '<pre>';
    print_r( $celulares );
    echo '</pre>';