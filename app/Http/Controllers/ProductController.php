<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\Product;
use App\models\Kind;
use App\models\Material;
use App\models\Size;
use App\models\Uses;
use App\models\Colour;
use Illuminate\Support\Facades\Redirect;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
	public function index()
	{
		$product = Product::join('kind', 'kind.kindID', '=', 'produk.productKind')
					->join('material', 'material.materialID', '=', 'produk.productMaterial')
					->join('colour', 'colour.colourID', '=', 'produk.productColour')
					->join('use', 'use.useID', '=', 'produk.productUse')
					->join('sizes', 'sizes.sizeID', '=', 'produk.productSize')
					->select(
						'produk.productID',
						'produk.productCode',
						'produk.productName', 
						'kind.kindName', 
						'material.materialName', 
						'colour.colourName', 
						'use.useName', 
						'sizes.sizeName', 
						'produk.productStock'
					)
					->orderBy('produk.productID', 'ASC')
					->get();

		return view('products.index', compact('product'));
	}

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //for dropdowns
		$kind = Kind::all();
		$material = Material::all();
		$colour = Colour::all();
		$size = Size::all();
		$use = Uses::all();
		
		return view('products.create', compact('kind','material','colour','size','use'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
		$product = new Product();
		$product->productID = $request->productID;
		$product->productCode = $request->productCode;
		$product->productName = $request->productName;
		$product->productColour = $request->productColour;
		$product->productKind = $request->productKind;
		$product->productMaterial = $request->productMaterial;
		$product->productSize = $request->productSize;
		$product->productUse = $request->productUse;
		$product->productStock = $request->productStock;
		
		$product->save();
		
		return Redirect::to('products');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request)
    {
		$search = $request->input('search');

        $product = Product::join('kind', 'kind.kindID', '=', 'produk.productKind')
					->join('material', 'material.materialID', '=', 'produk.productMaterial')
					->join('colour', 'colour.colourID', '=', 'produk.productColour')
					->join('use', 'use.useID', '=', 'produk.productUse')
					->join('sizes', 'sizes.sizeID', '=', 'produk.productSize')
					->select(
						'produk.productID',
						'produk.productCode',
						'produk.productName', 
						'kind.kindName', 
						'material.materialName', 
						'colour.colourName', 
						'use.useName', 
						'sizes.sizeName', 
						'produk.productStock'
					)
					->where('productName', 'LIKE', "%{$search}%")
					->orderBy('produk.productID', 'ASC')
					->get();

		return view('products.index', ['product' => $product]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $product = Product::where('productID', $id)->first();
		
		//for dropdowns
		$kind = Kind::all();
		$material = Material::all();
		$colour = Colour::all();
		$size = Size::all();
		$use = Uses::all();
		
		return view('products.edit', ['product' => $product], compact('kind','material','colour','size','use'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $product = Product::find($id);
		
		$product->productID = $request->productID;
		$product->productCode = $request->productCode;
		$product->productName = $request->productName;
		$product->productColour = $request->productColour;
		$product->productKind = $request->productKind;
		$product->productMaterial = $request->productMaterial;
		$product->productSize = $request->productSize;
		$product->productUse = $request->productUse;
		$product->productStock = $request->productStock;
		$product->save();

		return Redirect::to('products')->with('success', 'Data Updated. ID: '. $id);
	}

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $product = Product::find($id);
		$product->delete();
		
		return Redirect::to('products');
    }
}