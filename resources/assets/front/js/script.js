document.querySelector(".burger-block").addEventListener('click', function () {
    document.querySelector(".burger").classList.toggle("active")
    document.querySelector(".burger-span").classList.toggle("active")
    document.querySelector(".burger-menu").classList.toggle("active")
  })

  window.addEventListener('scroll', function() {
    var arrow = document.querySelector('.sidebar');
    var footer = document.querySelector('.footer');
    var distanceFromTop = footer.offsetTop - window.innerHeight - 50;
  
    if (window.scrollY > 600) {
      arrow.classList.add('visible');
    } else {
      arrow.classList.remove('visible');
    }
  
    if (window.scrollY > distanceFromTop) {
        arrow.classList.remove('visible');
    } 
  });

  window.addEventListener('scroll', function() {
    var header = document.querySelector('.header-menu'); 
    if (window.scrollY > 50) {
      header.classList.add('sticky');
    } else {
      header.classList.remove('sticky');
    }
  });

  const animItems = document.querySelectorAll('._anim-item')

if (animItems.length > 0) {
  window.addEventListener('scroll', animOnScroll)
  function animOnScroll() {
    for (let i = 0; i < animItems.length; i += 1) {
      const animItem = animItems[i]
      const animItemHeight = animItem.offsetHeight
      const animItemOffset = offset(animItem).top
      const animStart = 4

      let animItemPoint = window.innerHeight - animItemHeight / animStart
      if (animItemHeight > window.innerHeight) {
        animItemPoint = window.innerHeight - window.innerHeight / animStart
      }

      if ((scrollY > animItemOffset - animItemPoint) && scrollY < (animItemOffset + animItemHeight)) {
        animItem.classList.add('_active')
      } else {
        if (!animItem.classList.contains('_anim-no-hide')) {
           animItem.classList.remove("_active");
        }
      }
    }
  }
  function offset(el) {
    const rect = el.getBoundingClientRect()
      scrollLeft = window.scrollX || document.documentElement.scrollLeft
      scrollTop = window.scrollY || document.documentElement.scrollTop;
    return { top: rect.top + scrollTop, left: rect.left + scrollLeft }
  }
  setTimeout(() => {
    animOnScroll();
  }, 300)
}

var sidebarLinks = document.getElementsByClassName('sidebar-link');
var sections = document.getElementsByTagName('section');

function updateActiveLink() {
  var currentSectionIndex = 0;
  var currentSectionPosition = sections[0].offsetTop - window.innerHeight / 2;

  for (var i = 1; i < sections.length; i++) {
    var sectionPosition = sections[i].offsetTop - window.innerHeight / 2;

    if (window.scrollY >= currentSectionPosition && window.scrollY < sectionPosition) {
      currentSectionIndex = i - 1;
      break;
    }

    currentSectionPosition = sectionPosition;
  }

  for (var j = 0; j < sidebarLinks.length; j++) {
    sidebarLinks[j].classList.remove('sidebar-link-1-active');
  }

  sidebarLinks[currentSectionIndex].classList.add('sidebar-link-1-active');
}

function onScroll() {
  requestAnimationFrame(updateActiveLink);
}

window.addEventListener('scroll', onScroll);



// Получаем ссылку на кнопку
var themeToggleBtn = document.querySelector('.theme-toggle');

// Добавляем обработчик события клика
themeToggleBtn.addEventListener('click', toggleTheme);

// Функция переключения темы
function toggleTheme() {
  // Получаем текущую тему
  var currentTheme = document.documentElement.getAttribute('data-theme');

  // Меняем значение атрибута data-theme на противоположное
  var newTheme = currentTheme === 'dark' ? 'light' : 'dark';
  document.documentElement.setAttribute('data-theme', newTheme);
}

// Получаем ссылку на кнопку
var themeToggleBtn = document.querySelector('.theme-toggle-mobile');

// Добавляем обработчик события клика
themeToggleBtn.addEventListener('click', toggleTheme);

// Функция переключения темы
function toggleTheme() {
  // Получаем текущую тему
  var currentTheme = document.documentElement.getAttribute('data-theme');

  // Меняем значение атрибута data-theme на противоположное
  var newTheme = currentTheme === 'dark' ? 'light' : 'dark';
  document.documentElement.setAttribute('data-theme', newTheme);
}