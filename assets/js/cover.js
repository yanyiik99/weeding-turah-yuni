// Mengambil Url yang diinput
const queryString = window.location.search;

// Inisialisasi Url Parameternya dan mendapatkan variablenya
const urlParams = new URLSearchParams(queryString);
const tamu = urlParams.get('tamu');

// JS DOM
const inEl = document.getElementById('tamu');
const newTagTamu = document.createElement('p');
newTagTamu.append(`"${tamu}"`);
inEl.append(newTagTamu);
