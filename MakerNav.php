<?php
namespace Plugin\Maker;

use Eccube\Common\EccubeNav;

class MakerNav implements EccubeNav
{
    /**
     * {@inheritdoc}
     *
     * @return array
     */
    public static function getNav()
    {
        return [
            'product' => [
                'children' => [
                    'maker' => [
                        'id' => 'maker',
                        'name' => 'maker.admin.sub_title',
                        'url' => 'maker_admin_index'
                    ]
                ]
            ]
        ];
    }
}