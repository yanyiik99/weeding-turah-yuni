// Swiper JS
const swiper = new Swiper('.swiper', {
  // Optional parameters
  direction: 'horizontal',
  loop: true,
  effect: 'cards',

  // If we need pagination
  pagination: {
    el: '.swiper-pagination',
  },

  // Navigation arrows
  navigation: {
    nextEl: '.swiper-button-next',
    prevEl: '.swiper-button-prev',
  },

  // AutoPlay
  autoplay: {
    delay: 3000,
  },
});

// Countdown

const dayEl = document.getElementById('day');
const hourEl = document.getElementById('hour');
const minuteEl = document.getElementById('minute');
const secondEl = document.getElementById('second');

const countdown = () => {
  const countDate = new Date('October 07, 2022 00:00:00').getTime();
  // console.log(countDate);
  const today = new Date().getTime();
  // console.log(today);
  const selisih = countDate - today;

  const s = 1000;
  const m = s * 60;
  const h = m * 60;
  const d = h * 24;

  // Inisialisasi variable
  const day = Math.floor(selisih / d);
  const hour = Math.floor((selisih % d) / h);
  const minute = Math.floor((selisih % h) / m);
  const second = Math.floor((selisih % m) / s);
  console.log(hour);

  dayEl.innerHTML = day;
  hourEl.innerHTML = hour < 10 ? '0' + hour : hour;
  minuteEl.innerHTML = minute < 10 ? '0' + minute : minute;
  secondEl.innerHTML = second < 10 ? '0' + second : second;
};

setInterval(countdown, 1000);




