<?php
class Cart
{
    public $items = null; //grupo de productos
    public $totalQty = 0;
    public $totalPrice = 0;

    public function __construct($oldCart)
    {
        if ($oldCart) {
            $this->items = $oldCart->items;
            $this->totalQty = $oldCart->totalQty;
            $this->totalPrice = $oldCart->totalPrice;
        }
    }

    public function add($item, $id)
    {
        $storedItem = ['qty' => 0, 'price' => $item->precio, 'price2' => $item->precio, 'item' => $item];
        if ($this->items) {
            if (array_key_exists($id, $this->items)) {
                $storedItem = $this->items[$id];
            }
        }
        $storedItem['qty']++;
        $storedItem['price'] = $item->precio * $storedItem['qty'];
        $this->items[$id] = $storedItem;
        $this->totalQty++;
        $this->totalPrice += $item->precio;
    }

    public function add2($item, $id, $cantidad)
    {
        $storedItem = ['qty' => 0, 'price' => $item->precio, 'price2' => $item->precio, 'item' => $item];
        if ($this->items) {
            if (array_key_exists($id, $this->items)) {
                $storedItem = $this->items[$id]; // guardar los datos para ese y usar sus propiedades id de producto
            }
        }
        $oldQty = $storedItem['qty']; //cantidad vieja
        $resta = $oldQty * $item->precio;
        $storedItem['qty'] = $cantidad; // nueva cantidad
        $storedItem['price'] = $item->precio * $storedItem['qty']; // nuevo precio
        $this->items[$id] = $storedItem; // actualizar items
        //$this->totalQty++;
        $this->totalPrice += $storedItem['price']-$resta; //actualizar precio total de venta de todos productos ( se resta lo que habia antes de el producto que se modifica)
       }

       public function removeItem($id)
       {
           $this->totalQty -= $this->items[$id]['qty'];
           $this->totalPrice -= $this->items[$id]['price'];
           unset($this->items[$id]);
       }
    // public function reduceByOne($id)
    // {
    //     $this->items[$id]['qty']--;
    //     $this->items[$id]['price'] -= $this->items[$id]['item']['precio_venta'];
    //     $this->totalQty--;
    //     $this->totalPrice -= $this->items[$id]['item']['precio_venta'];
    //     if ($this->items[$id]['qty'] <= 0) {
    //         unset($this->items[$id]);
    //     }
    // }
    //
    // public function PlusOne($id)
    // {
    //     if ($this->items[$id]['qty'] < 10) {
    //         $this->items[$id]['qty']++;
    //         $this->items[$id]['price'] += $this->items[$id]['item']['precio_venta'];
    //         $this->totalQty++;
    //         $this->totalPrice += $this->items[$id]['item']['precio_venta'];
    //
    //     }
    // }

}
