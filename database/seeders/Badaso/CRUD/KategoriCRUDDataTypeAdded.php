<?php

namespace Database\Seeders\Badaso\CRUD;

use Illuminate\Database\Seeder;
use Uasoft\Badaso\Facades\Badaso;
use Uasoft\Badaso\Models\MenuItem;

class KategoriCRUDDataTypeAdded extends Seeder
{
    /**
     * Auto generated seed file
     *
     * @return void
     *
     * @throws Exception
     */
    public function run()
    {
        \DB::beginTransaction();

        try {

            $data_type = Badaso::model('DataType')->where('name', 'kategori')->first();
            
            if ($data_type) {
                Badaso::model('DataType')->where('name', 'kategori')->delete();
            }

            \DB::table('badaso_data_types')->insert(array (
                'name' => 'kategori',
                'slug' => 'kategori',
                'display_name_singular' => 'Kategori',
                'display_name_plural' => 'Kategori',
                'icon' => 'description',
                'model_name' => NULL,
                'policy_name' => NULL,
                'controller' => NULL,
                'order_column' => NULL,
                'order_display_column' => NULL,
                'order_direction' => NULL,
                'generate_permissions' => true,
                'server_side' => false,
                'description' => NULL,
                'details' => NULL,
                'notification' => '[]',
                'is_soft_delete' => false,
                'updated_at' => '2021-11-05T11:56:10.000000Z',
                'created_at' => '2021-11-05T11:56:10.000000Z',
                'id' => 1,
            ));

            Badaso::model('Permission')->generateFor('kategori');

            $menu = Badaso::model('Menu')->where('key', config('badaso.default_menu'))->firstOrFail();
            
            $menu_item = Badaso::model('MenuItem')
                ->where('menu_id', $menu->id)
                ->where('url', '/admin/kategori')
                ->first();
            
            $order = Badaso::model('MenuItem')->highestOrderMenuItem();
            
            if (!is_null($menu_item)) {
                $menu_item->fill([
                    'title' => 'Kategori',
                    'target' => '_self',
                    'icon_class' => 'description',
                    'color' => null,
                    'parent_id' => null,
                    'permissions' => 'browse_kategori',
                    'order' => $order,
                ])->save();
            } else {
                $menu_item = new MenuItem();
                $menu_item->menu_id = $menu->id;
                $menu_item->url = '/admin/kategori';
                $menu_item->title = 'Kategori';
                $menu_item->target = '_self';
                $menu_item->icon_class = 'description';
                $menu_item->color = null;
                $menu_item->parent_id = null;
                $menu_item->permissions = 'browse_kategori';
                $menu_item->order = $order;
                $menu_item->save();
            }

            \DB::commit();
        } catch(Exception $e) {
            \DB::rollBack();

           throw new Exception('Exception occur ' . $e);
        }
    }
}
