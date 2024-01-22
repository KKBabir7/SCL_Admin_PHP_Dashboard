//Demo chart 1
var xValues = ["Italy", "France", "Spain", "USA", "Argentina"];
var yValues = [55, 49, 44, 24, 15];
var barColors = ["red", "green", "blue", "orange", "brown"];

new Chart("myChart", {
  type: "bar",
  data: {
    labels: xValues,
    datasets: [
      {
        backgroundColor: barColors,
        data: yValues,
      },
    ],
  },
  options: {
    legend: { display: false },
    title: {
      display: true,
      text: "World Wine Production 2018",
    },
  },
});







//Demo chart 2
const xValues2 = ["Italy", "France", "Spain", "USA", "Argentina"];
const yValues2 = [55, 49, 44, 24, 15];
const barColors2 = [
  "#b91d47",
  "#00aba9",
  "#2b5797",
  "#e8c3b9",
  "#1e7145",
];

new Chart("myChart2", {
  type: "doughnut",
  data: {
    labels: xValues2,
    datasets: [
      {
        backgroundColor: barColors2,
        data: yValues2,
      },
    ],
  },
  options: {
    title: {
      display: true,
      text: "World Wide Wine Production 2018",
    },
  },
});







//Demo chart 3
const xValues3 = [50, 60, 70, 80, 90, 100, 110, 120, 130, 140, 150];
const yValues3 = [7, 8, 8, 9, 9, 9, 10, 11, 14, 14, 15];

new Chart("myChart3", {
  type: "line",
  data: {
    labels: xValues3,
    datasets: [
      {
        fill: false,
        lineTension: 0,
        backgroundColor: "rgba(0,0,255,1.0)",
        borderColor: "rgba(0,0,255,0.1)",
        data: yValues3,
      },
    ],
  },
  options: {
    legend: { display: false },
    scales: {
      yAxes: [{ ticks: { min: 6, max: 16 } }],
    },
  },
});