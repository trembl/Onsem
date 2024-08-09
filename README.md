# Onsem - WordPress/ClassicPress Theme for onsem.info


## Development Notes

1. Install XAMPP
2. Install [ClassicPress](https://www.classicpress.net)
3. Install the Plugins
4. Get a copy of the Onsem DB
5. Clone this theme

### Working with Tailwind CSS

[Tailwind CSS](https://tailwindcss.com) is a utility-first CSS Framework, it only includes the styles that are actually used in the site.

#### Watch Tailwind CSS
`npx tailwindcss -i ./styles/input.css -o ./styles/onsem.css --watch`

Any changes in the PHP Template files or `input.css` trigger an update in the `onsem.css`

#### Build Tailwind CSS
`npx tailwindcss -i ./styles/input.css -o ./styles/onsem.css --build`

Build and clean-up the `onsem.css`.