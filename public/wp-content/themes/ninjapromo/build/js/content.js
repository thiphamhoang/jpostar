// tab
class TabList {
  constructor(buttonsContainer, tabs) {
    this.buttonsContainer = buttonsContainer;
    this.tabs = tabs;
    this.buttonsContainer.addEventListener('click', (event) => {
      const btn = event.target.closest('button');
      const index = btn.dataset.tab;

      if (index) {
        this.buttonsContainer.classList.remove('not-active');
        this.openTab(index, btn);
      }
    });
  }

  openTab(index, btn) {
    this.tabs.querySelector('.active')?.classList.remove('active');
    this.tabs.querySelector(`[data-tab="${index}"]`)?.classList.add('active');

    this.buttonsContainer.querySelector('.active')?.classList.remove('active');
    btn.classList.add('active');
  }
}

document.addEventListener('DOMContentLoaded', () => {
  const buttonsContainer = document.querySelector('.js-tabs-btns');
  const tabs = document.querySelector('.js-tabs-items');

  if (buttonsContainer && tabs) {
    const tabList = new TabList(buttonsContainer, tabs);
  }

  const mobileSpoilers = document.querySelector('.js-spoiler-btns');
  const mobileSpoilersItems = document.querySelector('.js-spoiler-items');

  if (mobileSpoilers && mobileSpoilersItems) {
    const tabList = new TabList(mobileSpoilers, mobileSpoilersItems);
  }
});

const selectTabs = document.querySelector('.js-tabs-select');
const buttonsContainer = document.querySelector('.js-tabs-btns');
const tabs = document.querySelector('.js-tabs-items');

if (selectTabs) {
  selectTabs.addEventListener('change', (e) => {
    const index = e.target.value;
    tabs.querySelector('.active')?.classList.remove('active');
    tabs.querySelector(`[data-tab="${index}"]`)?.classList.add('active');
  });
}
// accordion
function faqSpoilers(items, btns, item) {
  [...btns].forEach((btn) => btn.addEventListener('click', (e) => {
    e.preventDefault();

    const closestItem = e.target.closest(item);

    if (!closestItem) {
      return;
    }

    [...items]
      .filter((item) => item !== closestItem)
      .forEach((item) => item.classList.remove('active'));

    closestItem.classList.toggle('active');
    const panel = e.target.nextElementSibling;

    if (panel.style.maxHeight) {
      panel.style.maxHeight = null;
    } else {
      panel.style.maxHeight = panel.scrollHeight + "px";
    }
  }));
}

const footer = document.querySelector('.js-footer');
if(footer) {
  const footerItems = footer.querySelectorAll('.js-footer-spoiler');
  const footerBtns = footer.querySelectorAll('.js-footer-spoiler-btn');

  faqSpoilers(footerItems, footerBtns, '.js-footer-spoiler');
}

const cases = document.querySelector('.js-cases');
if(cases) {
  const casesItems = cases.querySelectorAll('.js-cases-spoiler');
  const casesBtns = cases.querySelectorAll('.js-cases-spoiler-btn');

  faqSpoilers(casesItems, casesBtns, '.js-cases-spoiler');
}

// modal

function openModal(e) {
  const activeTab = document.querySelector('.js-tabs-items > .active');
  const openModalBtn = e.target.closest('.js-modal-open');
  const modals = document.querySelectorAll('.js-modal');
  const modal = [...modals].find((m) => {
    if(!openModalBtn.dataset.tab) {
      return m.dataset.modal === openModalBtn.dataset.modal;
    }
    if(m.dataset.tab !== activeTab.dataset.tab) {
      return false;
    }
    return true;
  });

  if (!modal) {
    return;
  }

  document.body.classList.add('is-fixed');
  modal.classList.add('opened');
  modal.querySelector('.modal__wrap').classList.add('fadeInUp');

  if (modal.dataset.modal === 'video') {
    const video = modal.querySelector('.js-modal-video');

    if(video.querySelector('source').getAttribute('src') !== openModalBtn.dataset.video) {
      video.querySelector('source').setAttribute('src', openModalBtn.dataset.video);
      video.load();
    }
    video.play();
  }

/*
  if (modal.dataset.modal === 'slider-img') {
    const activeImg = e.target.closest('img');
    const modalImgs = modal.querySelectorAll('img');
    const modalImg = [...modalImgs].find((modalimg) => compareUrls(modalimg.src, activeImg.src));

    if(modalImg) {
      modalSliders[activeTab.dataset.tab - 1].goTo(modalImg.dataset.slide);
    }
  } */
}

function closeModal(e) {
  e.target.closest('.js-modal').classList.remove('opened');
  document.body.classList.remove('is-fixed');

  if (e.target.closest('.js-modal').dataset.modal === 'video') {
    e.target.closest('.js-modal').querySelector('.js-modal-video').pause();
  }
}

document.body.addEventListener('click', (e) => {
  if (e.target.closest('.js-modal-open')) {
    openModal(e);
    return;
  }

  if (e.target.closest('.js-modal-close')) {
    closeModal(e);
  }
});
// End Modals

