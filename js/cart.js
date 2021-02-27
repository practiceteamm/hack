// プラスマイナスを押すと金額が反映される処理
var quant = 0;  //金額格納用

// var value = $('#value').val();
// マイナスを押すと数量が変わる処理
$('.minus-btn').on('click', function (e) {
    e.preventDefault();
    var $this = $(this);
    var $input = $this.closest('div').find('input');
    var value = parseInt($input.val());

    if (value >= 1) {
        value = value - 1;
        quant -= 1000;
    } else if (value === 0) {
        value = 0
        quant = 0
    }

    $input.val(value);
    console.log(quant)

});

// プラスを押すと数量が変わる処理
$('.plus-btn').on('click', function (e) {
    e.preventDefault();
    var $this = $(this);
    var $input = $this.closest('div').find('input');
    let value = parseInt($input.val());

    if (value < 100) {
        value = value + 1;
        quant += 1000;
    } else {
        value = 100;
    }

    $input.val(value);
});
// ここまで



$('.plus-btn').click(function () {
    var $this = $(this);
    var $input = $this.closest('div').find('input');
    let value = parseInt($input.val());

    console.log(value);
    $('#total').html(quant); //金額を反映

});

$('.minus-btn').click(function () {
    var $this = $(this);
    var $input = $this.closest('div').find('input');
    let value = parseInt($input.val());

    $('#total').html(quant); //金額を反映
});

