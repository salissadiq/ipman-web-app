$('form.ajaxprice').on('submit', function() {

  var that = $(this);
  deport = $('#deportId').attr('value');
  product = $('#productId').attr('value');
  price = $('#price').val()
  url = that.attr('action');
  type = that.attr('method');
  data = {deport_id:deport, product_id: product, price: price};

console.log(data);
  $.ajax({
    url: url,
    type: type,
  data: data,
  success: function(response){
    $('#feedback').html(response);
   }
  });

  return false;
});
