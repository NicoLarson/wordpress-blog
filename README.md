# wordpress-blog

- Titre: Les notes de Mr.YANG
- Sous-titre:

## TODO

- [x] Ajouter menu footer
- [x] Update style pour "Pas d'article"
- [x] Crée page 404
- [x] Ajouter la police MR ROBOT
- [ ] Ajouter un dark mode

## Couleurs: GruvBox

```css
:root {
  /* light mode*/
  /* dark mode */
  --background: #282828;
  --foreground: #ebdbb2;
  --alpha: #00000000;
  --shade: #282828;
  --background-tray: #1d2021;
  --red-dark: #cc241d;
  --red-light: #fb4939;
  --green-dark: #98971a;
  --green-light: #b8bb26;
  --yellow-dark: #d79921;
  --yellow-light: #fabd2f;
  --blue-dark: #458588;
  --blue-light: #83a598;
  --purple-dark: #b16286;
  --purple-light: #d3869b;
  --aqua-dark: #689d6a;
  --aqua-light: #8ec07c;
  --orange-dark: #d65d0e;
  --orange-light: #fe8019;
  --gray-dark: #928374;
  --gray-light: #a89984;
  --blue-arch: #1793d1;
  --green-spotify: #1db954;
  --hover-color: #3c3a36;
  --newtab-textbox-background-color: var(--background);
}
```

## Police: Spartan, JetBrain

```html
<link rel="preconnect" href="https://fonts.googleapis.com" />
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
<link
  href="https://fonts.googleapis.com/css2?family=JetBrains+Mono:wght@200;400;600&family=Spartan:wght@300;400;500;700&display=swap"
  rel="stylesheet"
/>
```

```css
@import url('https://fonts.googleapis.com/css2?family=JetBrains+Mono:wght@200;400;600&family=Spartan:wght@200;400;600&display=swap');


font-family: "JetBrains Mono", monospace;
font-family: "Spartan", sans-serif;
```

## Fonctionalité:

- pagination
- recherche articles

## Architecture du site

### Entete

- Titre
- Menu Etiquete
- Recherche

### Pied de page

- Menu Etiquete
- A propos
- Politique...

### Page d'acceuil

- Liste des derniers posts

### Post page

- Illustration
- titre
- sous-titre
- Date
- Contenue
- resources

### Page 404
