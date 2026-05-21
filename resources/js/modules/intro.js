if (document.querySelector('[data-fade-in="header"]')) {
  const onScroll = () => {
    if (window.scrollY <= 10) return;

    document.body.classList.add('has-scroll');
    window.removeEventListener('scroll', onScroll);
  };

  onScroll();
  window.addEventListener('scroll', onScroll, { passive: true });
}
