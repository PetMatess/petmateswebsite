const formBtn1 = document.querySelector('#btn-1');
const formBtnPrev2 = document.querySelector('#btn-2-prev');
const formBtnNext2 = document.querySelector('#btn-2-next');
const formBtn3 = document.querySelector('#btn-3');

// Button listener of form 1
formBtn1.addEventListener('click', function(e) {
  gotoNextForm(formBtn1, formBtnNext2, 1, 2);
  e.preventDefault();
});

// Next button listener of form 2
formBtnNext2.addEventListener('click', function(e) {
  gotoNextForm(formBtnNext2, formBtn3, 2, 3);
  e.preventDefault();
});

// Previous button listener of form 2
formBtnPrev2.addEventListener('click', function(e) {
  gotoNextForm(formBtnNext2, formBtn1, 2, 1);
  e.preventDefault();
});

// Button listener of form 3
formBtn3.addEventListener('click', function(e) {
  document.querySelector(`.step--3`).classList.remove('step-active');
  document.querySelector(`.step--4`).classList.add('step-active');
  formBtn3.parentElement.style.display = 'none';

  e.preventDefault();
});

const gotoNextForm = (prev, next, stepPrev, stepNext) => {
  // Get form through the button
  const prevForm = prev.parentElement;
  const nextForm = next.parentElement;
  const nextStep = document.querySelector(`.step--${stepNext}`);
  const prevStep = document.querySelector(`.step--${stepPrev}`);
  // Add active/inactive classes to both previous and next form
  nextForm.classList.add('form-active');
  nextForm.classList.add('form-active-animate');
  prevForm.classList.add('form-inactive');
  // Change the active step element
  prevStep.classList.remove('step-active');
  nextStep.classList.add('step-active');
  // Remove active/inactive classes to both previous an next form
  setTimeout(() => {
    prevForm.classList.remove('form-active');
    prevForm.classList.remove('form-inactive');
    nextForm.classList.remove('form-active-animate');
  }, 1000);
};



const dropArea = document.querySelector(".drop_box"),
  button = dropArea.querySelector("button"),
  dragText = dropArea.querySelector("header"),
  input = dropArea.querySelector("input");
let file;
var filename;

button.onclick = () => {
  input.click();
};

input.addEventListener("change", function (e) {
  var fileName = e.target.files[0].name;
  let filedata = `
    <form action="" method="post">
    <div class="form">
    <h4>${fileName}</h4>
    <input type="email" placeholder="Enter email upload file">
    <button class="btn">Upload</button>
    </div>
    </form>`;
  dropArea.innerHTML = filedata;
});






