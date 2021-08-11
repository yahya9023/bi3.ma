<x-app-layout>
   
<div class="container">
<form action="{{route('product.store')}}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="form-group">
      <label for="name">title</label>
      <input type="text" class="form-control" name="name">
    </div>
    <div class="form-group" >
      <label for="description">content</label>
      <textarea name="description" class="form-control" ></textarea>
    </div>
    <div class="form-group">
      <input type="file" name="image">
    </div>
    <div class="form-group">
        <label for="price">price</label>
        <input type="text" class="form-control" name="price">
      </div>
      <div class="form-group">
        <label for="old_price">old_price</label>
        <input type="text" class="form-control" name="old_price">
      </div>
      <div class="form-group">
        <label for="quantite">quantite</label>
        <input type="number" class="form-control" name="quantite">
      </div>
      <div class="form-group">
        <label for="exampleFormControlSelect1">size select</label>
        <select name="size" class="form-control" id="exampleFormControlSelect1">
          <option>L</option>
          <option>M</option>
          <option>XL</option>
          <option>XXL</option>
          <option>XXXL</option>
        </select>
      </div>
      <div class="form-group">
        <label for="exampleFormControlSelect1">category_id select</label>
        <select name="category_id" class="form-control" id="exampleFormControlSelect1">
          <option>1</option>
          <option>2</option>
          <option>3</option>
          <option>4</option>
          <option>5</option>
        </select>
      </div>
      <div class="form-group">
        <label for="exampleFormControlSelect1">color select</label>
        <select name="color" class="form-control" id="exampleFormControlSelect1">
          <option>RED</option>
          <option>GREEN</option>
          <option>YELLOW</option>
          <option>BROWN</option>
        </select>
      </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
</div>

</x-app-layout>