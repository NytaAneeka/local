<?php
//ANTRA uzduotis

$navigacija=array(
    array(
        'id'=>1,
        'caption'=>'Apie mus',
        'subMenu'=>
            array(
                array(
                    'id'=>2,
                    'caption'=>'Mûsø vizija',
                ),
                array(
                    'id'=>3,
                    'caption'=>'Istorija'
                )
            )
    ),
    array(
        'id'=>4,
        'caption'=>'Teikiamos paslaugos'
    ),
    array(
        'id'=>5,
        'caption'=>'Mûsø darbai',
        'subMenu'=>
            array(
                array(
                    'id'=>6,
                    'caption'=>'Tinklapiø kûrimas'
                ),
                array(
                    'id'=>7,
                    'caption'=>'Programinë áranga'
                )
            )
    ),
    array(
        'id'=>8,
        'caption'=>'Kontaktai'
    )

);
echo generateMenu($navigacija);

function generateMenu($nav,$child = false) {
    $output = '';
    if (!empty($nav)) {
        foreach ($nav as $menu) {
            $output .= ($child?'-----':'') . '' . $menu['id'] . '<a href="2_uzduotis.php">' . $menu['caption'] .'</a><br />';
            if (isset($menu['subMenu'])) {
                $output .= generateMenu($menu['subMenu'],true);
            }
        }
    }

    return $output;
}