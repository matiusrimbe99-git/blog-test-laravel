"use strict";

$("#swal-1").click(function () {
  swal('Hello');
});

$("#swal-2").click(function () {
  swal('Good Job', 'You clicked the button!', 'success');
});

$("#swal-3").click(function () {
  swal('Good Job', 'You clicked the button!', 'warning');
});

$("#swal-4").click(function () {
  swal('Good Job', 'You clicked the button!', 'info');
});

$("#swal-5").click(function () {
  swal('Good Job', 'You clicked the button!', 'error');
});

$("#swal-6").click(function () {
  swal({
    title: 'Are you sure?',
    text: 'Once deleted, you will not be able to recover this imaginary file!',
    icon: 'warning',
    buttons: true,
    dangerMode: true,
  })
    .then((willDelete) => {
      if (willDelete) {
        swal('Poof! Your imaginary file has been deleted!', {
          icon: 'success',
        });
      } else {
        swal('Your imaginary file is safe!');
      }
    });
});

$("#swal-7").click(function () {
  swal({
    title: 'What is your name?',
    content: {
      element: 'input',
      attributes: {
        placeholder: 'Type your name',
        type: 'text',
      },
    },
  }).then((data) => {
    swal('Hello, ' + data + '!');
  });
});

$("#swal-8").click(function () {
  swal('This modal will disappear soon!', {
    buttons: false,
    timer: 3000,
  });
});

$(".swal-delete").click(function (event) {
  event.preventDefault();
  swal({
    title: 'Anda yakin ingin menghapus?',
    text: 'Postingan akan dihapus secara permanen!',
    icon: 'warning',
    buttons: {
      cancel: 'Batal',
      confirm: 'Yakin',
    },
  })
    .then((willDelete) => {
      if (willDelete) {
        document.getElementById('delete-post').submit();
        swal('Berhasil! Postingan dihapus permanen!', {
          icon: 'success',
          buttons: false,
        });
      }
    });
});

$(".swal-restore").click(function () {
  swal({
    title: "Sukses!",
    text: "Postingan berhasil dipulihkan!",
    icon: "success",
    button: false,
  });
});

$(".swal-trash").click(function () {
  swal({
    title: "Berhasil!",
    text: "Postingan dipindahkan ke sampah!",
    icon: "success",
    button: false,
  });
});

$(".swal-logout").click(function (event) {
  event.preventDefault();
  swal({
    title: 'Yakin ingin keluar?',
    text: 'Pilih Yakin jika ingin keluar!',
    icon: 'warning',
    buttons: {
      cancel: 'Batal',
      confirm: 'Yakin',
    },
  })
    .then((willlogout) => {
      if (willlogout) {
        document.getElementById('logout-form').submit();
        swal('Keluar! Selamat datang kembali!', {
          icon: 'success',
          buttons: false,
        });
      }
    });
});




