export default function MenuCanvas() {
  return {
    open: false,
    triggerEl: null,
    titleId: `drawerTitle-${Math.random().toString(36).slice(2)}`,

    openDrawer(trigger) {
      this.triggerEl = trigger || null;
      this.open = true;
      // Focalise le bouton fermer après l’anim
      requestAnimationFrame(() => {
        setTimeout(() => {
          const btn = document.querySelector('[aria-label="Fermer"]');
          btn && btn.focus();
        }, 300);
      });
    },
    close() {
      this.open = false;
      // Rendre le focus au trigger après fermeture
      requestAnimationFrame(() => {
        setTimeout(() => {
          this.triggerEl && this.triggerEl.focus();
        }, 300);
      });
    },
    toggle() {
      this.open ? this.close() : this.openDrawer();
    },
  };
}
