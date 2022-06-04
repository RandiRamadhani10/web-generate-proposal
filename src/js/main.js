// const button = document.querySelector(".form-kwitansi");

const button = document.querySelector(".form-parent");

const data = document.querySelectorAll(".form-control");
const dataSelect = document.querySelectorAll(".form-select");

button.addEventListener("submit", (event) => {
  event.preventDefault();

  const dataForm = {
    tanggalSurat: changeLang(data[0].value),
    tanggalAwal: changeLang(data[1].value),
    tanggalAkhir: changeLang(data[2].value),
    jumlahHari: data[3].value,
    uangTransport: data[4].value,
    terbilangTransport: data[5].value,
    uangHarian: data[6].value,
    terbilangHarian: data[7].value,
    pegawaiPertama: dataSelect[0].value,
    pegawaiKedua: dataSelect[1].value,
    pegawaiKetiga: dataSelect[2].value,
    selisihHari: countDate(data[1].value, data[2].value),
    terbilangTotal: data[8].value,
    detailTujuan: data[9].value,
  };
  console.log(data);
  Swal.fire({
    title: "Apakah sudah terisi semua?",
    icon: "info",
    showCancelButton: true,
    confirmButtonColor: "#3085d6",
    cancelButtonColor: "#d33",
    confirmButtonText: "Yes!",
  }).then((result) => {
    if (result.isConfirmed) {
      postData(dataForm);
    }
  });
});

const postData = (dat) => {
  console.log("here");
  fetch("./src/data/models.php", {
    method: "POST",
    headers: {
      "content-type": "application/json",
    },
    body: JSON.stringify(dat),
  }).then((response) => {
    // if (response.status !== 200) throw new Error(response.message);
    console.log(response.json());
    location.href = "./src/components/kwitansi.php";
    return response.json();
  });
};
const countDate = (start, end) => {
  var current = moment(start);
  var given = moment(end);
  return moment.duration(given.diff(current)).asDays();
};

const changeLang = (date) => {
  const march = moment(date);
  march.locale("id");
  return march.format("DD MMMM YYYY");
};
