function toggleSubtopics(topic) {
  const subtopics = topic.querySelector('.subtopics');
  subtopics.style.display = subtopics.style.display === 'block' ? 'none' : 'block';
}


function formados() {
  var element1 = document.getElementById("container2");
  var element2 = document.getElementById("container");
  var element3 = document.getElementById("container3");
  element1.style.display = 'block';
  element2.style.display = 'none';
  element3.style.display = 'none';
}

function todos() {
  var element1 = document.getElementById("container");
  var element2 = document.getElementById("container2");
  var element3 = document.getElementById("container3");
  element1.style.display = 'block';
  element2.style.display = 'none';
  element3.style.display = 'none';
}

function emFormacao() {
  var element1 = document.getElementById("container3");
  var element2 = document.getElementById("container");
  var element3 = document.getElementById("container2");
  element1.style.display = 'block';
  element2.style.display = 'none';
  element3.style.display = 'none';
}

function trocaPreto() {
  var element = document.getElementById("corpo");
  var element1 = document.getElementById("sol");
  var element2 = document.getElementById("lua");
  element.style.background = '#000';
  element1.style.display = 'block';
  element2.style.display = 'none';
}

function trocaBranco() {
  var element = document.getElementById("corpo");
  var element1 = document.getElementById("sol");
  var element2 = document.getElementById("lua");
  element.style.background = '#fff';
  element1.style.display = 'none';
  element2.style.display = 'block';
}