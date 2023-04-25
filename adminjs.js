const pop = document.getElementById('pop');
const form = document.getElementById('form');

pop.addEventListener('click', () => {
  form.classList.add('showPopup');
});

const des = document.getElementById('des');

des.addEventListener('click', () => {
  form.classList.remove('showPopup');
});

const modifierButtons = document.getElementsByClassName('edit');
const form2 = document.getElementsByClassName('popup2');
const des2 = document.getElementsByClassName('des2');

for (let i = 0; i < modifierButtons.length;i++) {
  modifierButtons[i].addEventListener('click', () => {
    form2[i].classList.add('showPopup');
  });
  des2[i].addEventListener('click', () => {
    form2[i].classList.remove('showPopup');
  });
 
}