<?php

namespace App\Http\Controllers;

use App\MenuItems;
use Illuminate\Http\Request;

class MenuItemsController extends Controller
{
  /**
   * Display a listing of the resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function index(Request $request)
  {
    return MenuItems::filter($request->get('filters'))
      ->sort($request->get('sort'))
      ->paginate($request->get('limit', 25));
  }

  /**
   * Store a newly created resource in storage.
   *
   * @param  \Illuminate\Http\Request $request
   * @return \Illuminate\Http\Response
   */
  public function store(Request $request)
  {
    $menuItem = new MenuItems;

    $menuItem->fill($request->only($menuItem->fillable));

    $menuItem->save();

    return $menuItem;
  }

  /**
   * Display the specified resource.
   *
   * @param  int $id
   * @return \Illuminate\Http\Response
   */
  public function show($id)
  {
    return MenuItems::findOrFail($id);
  }

  /**
   * Update the specified resource in storage.
   *
   * @param  \Illuminate\Http\Request $request
   * @param  int $id
   * @return \Illuminate\Http\Response
   */
  public function update(Request $request, $id)
  {
    $menuItem = MenuItems::findOrFail($id);

    $menuItem->update($request->only($menuItem->fillable));

    return $menuItem;
  }

  /**
   * Remove the specified resource from storage.
   *
   * @param  int $id
   * @return \Illuminate\Http\Response
   */
  public function destroy($id)
  {
    MenuItems::findOrFail($id)->delete();
  }
}
