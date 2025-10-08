/* ===============================================
# アニメーション
// =============================================== */
document.addEventListener('DOMContentLoaded', () => {
  function observeElements(selector) {
    let activeClass = arguments.length > 1 && arguments[1] !== undefined ? arguments[1] : "is-active";
    let options = arguments.length > 2 && arguments[2] !== undefined ? arguments[2] : {};
    let keepActive = arguments.length > 3 && arguments[3] !== undefined ? arguments[3] : false;
    const elements = document.querySelectorAll(selector);
    function handleIntersect(entries, observer) {
      entries.forEach(entry => {
        if (entry.isIntersecting) {
          entry.target.classList.add(activeClass);
          if (!keepActive) {
            observer.unobserve(entry.target);
          }
        } else {
          if (!keepActive) {
            entry.target.classList.remove(activeClass);
          }
        }
      });
    }
    const observer = new IntersectionObserver(handleIntersect, options);
    elements.forEach(element => observer.observe(element));
  }
  function getRootMargin(pcMargin, spMargin) {
    return window.matchMedia("(min-width: 768px)").matches ? pcMargin : spMargin;
  }
  observeElements(".js-fade-up", "is-active", {
    rootMargin: getRootMargin("0px 0px -20% 0px", "0px 0px -20% 0px")
  });
  observeElements(".js-section-title-split", "is-active", {
    rootMargin: getRootMargin("0px 0px -10% 0px", "0px 0px -5% 0px")
  });
  observeElements(".js-bounce-in", "is-active", {
    rootMargin: getRootMargin("0px 0px -20% 0px", "0px 0px -10% 0px")
  });
  observeElements(".js-deco", "is-active", {
    rootMargin: getRootMargin("0px 0px -10% 0px", "0px 0px -5% 0px")
  });
})

  // =======================
  // 文字を1文字ずつ <span> に分割
  // =======================
  function wrapTextInSpans(selector) {
    document.querySelectorAll(selector).forEach(element => {
      const text = element.textContent;
      element.setAttribute('aria-label', text);
      element.setAttribute('role', 'text');
      element.textContent = '';
      [...text].forEach((char, index) => {
        const span = document.createElement('span');
        span.textContent = char;
        span.style.setProperty('--index', index);
        span.setAttribute('aria-hidden', 'true');
        element.appendChild(span);
      });
    });
  }
  wrapTextInSpans(".js-text-split");
  wrapTextInSpans(".js-section-title-split");