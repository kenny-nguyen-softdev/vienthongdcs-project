<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    @php
        $logo = $data['company']->logo;
    @endphp
<style>
  :root {
  --mdb-red: #f44336;
  --mdb-pink: #e91e63;
  --mdb-purple: purple-500;
  --mdb-indigo: #3f51b5;
  --mdb-blue: #2196f3;
  --mdb-cyan: #00bcd4;
  --mdb-teal: #009688;
  --mdb-green: #4caf50;
  --mdb-yellow: #ffeb3b;
  --mdb-orange: #ff9800;
  --mdb-white: #fff;
  --mdb-black: #000;
  --mdb-gray: #757575;
  --mdb-gray-dark: #4f4f4f;
  --mdb-gray-50: #fbfbfb;
  --mdb-gray-100: #f5f5f5;
  --mdb-gray-200: #eee;
  --mdb-gray-300: #e0e0e0;
  --mdb-gray-400: #bdbdbd;
  --mdb-gray-500: #9e9e9e;
  --mdb-gray-600: #757575;
  --mdb-gray-700: #616161;
  --mdb-gray-800: #4f4f4f;
  --mdb-gray-900: #262626;
  --mdb-primary: #3b71ca;
  --mdb-secondary: #9fa6b2;
  --mdb-success: #14a44d;
  --mdb-danger: #dc4c64;
  --mdb-warning: #e4a11b;
  --mdb-info: #54b4d3;
  --mdb-light: #fbfbfb;
  --mdb-dark: #332d2d;
  --mdb-primary-rgb: 59, 113, 202;
  --mdb-secondary-rgb: 159, 166, 178;
  --mdb-success-rgb: 20, 164, 77;
  --mdb-danger-rgb: 220, 76, 100;
  --mdb-warning-rgb: 228, 161, 27;
  --mdb-info-rgb: 84, 180, 211;
  --mdb-light-rgb: 251, 251, 251;
  --mdb-dark-rgb: 51, 45, 45;
  --mdb-white-rgb: 255, 255, 255;
  --mdb-black-rgb: 0, 0, 0;
  --mdb-body-color-rgb: 79, 79, 79;
  --mdb-body-bg-rgb: 255, 255, 255;
  --mdb-font-sans-serif: system-ui, -apple-system, "Segoe UI", Roboto,
    "Helvetica Neue", "Noto Sans", "Liberation Sans", Arial, sans-serif,
    "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
  --mdb-font-monospace: SFMono-Regular, Menlo, Monaco, Consolas,
    "Liberation Mono", "Courier New", monospace;
  --mdb-gradient: linear-gradient(
    180deg,
    hsla(0, 0%, 100%, 0.15),
    hsla(0, 0%, 100%, 0)
  );
  --mdb-body-font-family: var(--mdb-font-roboto);
  --mdb-body-font-size: 1rem;
  --mdb-body-font-weight: 400;
  --mdb-body-line-height: 1.6;
  --mdb-body-color: #4f4f4f;
  --mdb-body-bg: #fff;
  --mdb-border-width: 1px;
  --mdb-border-style: solid;
  --mdb-border-color: #e0e0e0;
  --mdb-border-color-translucent: rgba(0, 0, 0, 0.175);
  --mdb-border-radius: 0.25rem;
  --mdb-border-radius-sm: 0.25rem;
  --mdb-border-radius-lg: 0.5rem;
  --mdb-border-radius-xl: 1rem;
  --mdb-border-radius-2xl: 2rem;
  --mdb-border-radius-pill: 50rem;
  --mdb-link-color: #3b71ca;
  --mdb-link-hover-color: #386bc0;
  --mdb-code-color: #e91e63;
  --mdb-highlight-bg: #fff9c4;
}
*,
:after,
:before {
  box-sizing: border-box;
}
@media (prefers-reduced-motion: no-preference) {
  :root {
    scroll-behavior: smooth;
  }
}
html,
        body {
            margin: 0 auto !important;
            padding: 0 !important;
            height: 100% !important;
            width: 100% !important;
            background: #f1f1f1;
        }
        /* What it does: Stops email clients resizing small text. */
        * {
            -ms-text-size-adjust: 100%;
            -webkit-text-size-adjust: 100%;
        }

        /* What it does: Centers email on Android 4.4 */
        div[style*="margin: 16px 0"] {
            margin: 0 !important;
        }

        /* What it does: A work-around for email clients meddling in triggered links. */
        *[x-apple-data-detectors],
        /* iOS */
        .unstyle-auto-detected-links *,
        .aBn {
            border-bottom: 0 !important;
            cursor: default !important;
            color: inherit !important;
            text-decoration: none !important;
            font-size: inherit !important;
            font-family: inherit !important;
            font-weight: inherit !important;
            line-height: inherit !important;
        }

        /* What it does: Prevents Gmail from displaying a download button on large, non-linked images. */
        .a6S {
            display: none !important;
            opacity: 0.01 !important;
        }

        /* What it does: Prevents Gmail from changing the text color in conversation threads. */
        .im {
            color: inherit !important;
        }

        /* If the above doesn't work, add a .g-img class to any image in question. */
        img.g-img+div {
            display: none !important;
        }

        /* What it does: Removes right gutter in Gmail iOS app: https://github.com/TedGoas/Cerberus/issues/89  */
        /* Create one of these media queries for each additional viewport size you'd like to fix */

        /* iPhone 4, 4S, 5, 5S, 5C, and 5SE */
        @media only screen and (min-device-width: 320px) and (max-device-width: 374px) {
            u~div .email-container {
                min-width: 320px !important;
            }
        }

        /* iPhone 6, 6S, 7, 8, and X */
        @media only screen and (min-device-width: 375px) and (max-device-width: 413px) {
            u~div .email-container {
                min-width: 375px !important;
            }
        }

        /* iPhone 6+, 7+, and 8+ */
        @media only screen and (min-device-width: 414px) {
            u~div .email-container {
                min-width: 414px !important;
            }
        }

        @media (max-width: 576px) {
            h2 {
                font-size: 18px !important;
            }

            h3 {
                font-size: 14px !important;
                font-weight: 100 !important;
            }

            span {
                font-size: 14px !important;
            }

            a {
                font-size: 18px !important;
            }

            img {
                width: 50px !important;
                max-width: 200px !important;
            }

            div {
                width: 100% !important
            }
        }
hr {
  margin: 1rem 0;
  color: inherit;
  border: 0;
  border-top: 1px solid;
  opacity: 0.25;
}
.h1,
.h2,
.h3,
.h4,
.h5,
.h6,
h1,
h2,
h3,
h4,
h5,
h6 {
  margin-top: 0;
  margin-bottom: 0.5rem;
  font-weight: 500;
  line-height: 1.2;
}
.h1,
h1 {
  font-size: calc(1.375rem + 1.5vw);
}
@media (min-width: 1200px) {
  .h1,
  h1 {
    font-size: 2.5rem;
  }
}
.h2,
h2 {
  font-size: calc(1.325rem + 0.9vw);
}
@media (min-width: 1200px) {
  .h2,
  h2 {
    font-size: 2rem;
  }
}
.h3,
h3 {
  font-size: calc(1.3rem + 0.6vw);
}
@media (min-width: 1200px) {
  .h3,
  h3 {
    font-size: 1.75rem;
  }
}
.h4,
h4 {
  font-size: calc(1.275rem + 0.3vw);
}
@media (min-width: 1200px) {
  .h4,
  h4 {
    font-size: 1.5rem;
  }
}
.h5,
h5 {
  font-size: 1.25rem;
}
.h6,
h6 {
  font-size: 1rem;
}
p {
  margin-top: 0;
  margin-bottom: 1rem;
}
abbr[title] {
  -webkit-text-decoration: underline dotted;
  text-decoration: underline dotted;
  cursor: help;
  -webkit-text-decoration-skip-ink: none;
  text-decoration-skip-ink: none;
}
address {
  margin-bottom: 1rem;
  font-style: normal;
  line-height: inherit;
}
ol,
ul {
  padding-left: 2rem;
}
dl,
ol,
ul {
  margin-top: 0;
  margin-bottom: 1rem;
}
ol ol,
ol ul,
ul ol,
ul ul {
  margin-bottom: 0;
}
dt {
  font-weight: 700;
}
dd {
  margin-bottom: 0.5rem;
  margin-left: 0;
}
blockquote {
  margin: 0 0 1rem;
}
b,
strong {
  font-weight: bolder;
}
.small,
small {
  font-size: 0.875em;
}
.mark,
mark {
  padding: 0.1875em;
  background-color: var(--mdb-highlight-bg);
}
sub,
sup {
  position: relative;
  font-size: 0.75em;
  line-height: 0;
  vertical-align: baseline;
}
sub {
  bottom: -0.25em;
}
sup {
  top: -0.5em;
}
a {
  color: var(--mdb-link-color);
}
a:hover {
  color: var(--mdb-link-hover-color);
  text-decoration: none;
}
a:not([href]):not([class]),
a:not([href]):not([class]):hover {
  color: inherit;
  text-decoration: none;
}
code,
kbd,
pre,
samp {
  font-family: var(--mdb-font-monospace);
  font-size: 1em;
}
pre {
  display: block;
  margin-top: 0;
  margin-bottom: 1rem;
  overflow: auto;
  font-size: 0.875em;
}
pre code {
  font-size: inherit;
  color: inherit;
  word-break: normal;
}
code {
  font-size: 0.875em;
  color: var(--mdb-code-color);
  word-wrap: break-word;
}
a > code {
  color: inherit;
}
kbd {
  padding: 0.1875rem 0.375rem;
  font-size: 0.875em;
  color: var(--mdb-body-bg);
  background-color: var(--mdb-body-color);
  border-radius: 0.25rem;
}
kbd kbd {
  padding: 0;
  font-size: 1em;
}
figure {
  margin: 0 0 1rem;
}
img,
svg {
  vertical-align: middle;
}
table {
  caption-side: bottom;
  border-collapse: collapse;
}
caption {
  padding-top: 1rem;
  padding-bottom: 1rem;
  color: #757575;
  text-align: left;
}
th {
  text-align: inherit;
  text-align: -webkit-match-parent;
}
tbody,
td,
tfoot,
th,
thead,
tr {
  border: 0 solid;
  border-color: inherit;
}
label {
  display: inline-block;
}
button {
  border-radius: 0;
}
button:focus:not(:focus-visible) {
  outline: 0;
}
button,
input,
optgroup,
select,
textarea {
  margin: 0;
  font-family: inherit;
  font-size: inherit;
  line-height: inherit;
}
button,
select {
  text-transform: none;
}
[role="button"] {
  cursor: pointer;
}
select {
  word-wrap: normal;
}
select:disabled {
  opacity: 1;
}
[list]:not([type="date"]):not([type="datetime-local"]):not([type="month"]):not([type="week"]):not([type="time"])::-webkit-calendar-picker-indicator {
  display: none !important;
}
[type="button"],
[type="reset"],
[type="submit"],
button {
  -webkit-appearance: button;
}
[type="button"]:not(:disabled),
[type="reset"]:not(:disabled),
[type="submit"]:not(:disabled),
button:not(:disabled) {
  cursor: pointer;
}
::-moz-focus-inner {
  padding: 0;
  border-style: none;
}
textarea {
  resize: vertical;
}
fieldset {
  min-width: 0;
  padding: 0;
  margin: 0;
  border: 0;
}
legend {
  float: left;
  width: 100%;
  padding: 0;
  margin-bottom: 0.5rem;
  font-size: calc(1.275rem + 0.3vw);
  line-height: inherit;
}
@media (min-width: 1200px) {
  legend {
    font-size: 1.5rem;
  }
}
legend + * {
  clear: left;
}
::-webkit-datetime-edit-day-field,
::-webkit-datetime-edit-fields-wrapper,
::-webkit-datetime-edit-hour-field,
::-webkit-datetime-edit-minute,
::-webkit-datetime-edit-month-field,
::-webkit-datetime-edit-text,
::-webkit-datetime-edit-year-field {
  padding: 0;
}
::-webkit-inner-spin-button {
  height: auto;
}
[type="search"] {
  outline-offset: -2px;
  -webkit-appearance: textfield;
} /*!rtl:raw:
[type="tel"],
[type="url"],
[type="email"],
[type="number"] {
  direction: ltr;
}
*/
::-webkit-search-decoration {
  -webkit-appearance: none;
}
::-webkit-color-swatch-wrapper {
  padding: 0;
}
::file-selector-button {
  font: inherit;
  -webkit-appearance: button;
}
output {
  display: inline-block;
}
iframe {
  border: 0;
}
summary {
  display: list-item;
  cursor: pointer;
}
progress {
  vertical-align: baseline;
}
[hidden] {
  display: none !important;
}
.lead {
  font-size: 1.25rem;
  font-weight: 300;
}
.display-1 {
  font-size: calc(1.625rem + 4.5vw);
  font-weight: 300;
  line-height: 1.2;
}
@media (min-width: 1200px) {
  .display-1 {
    font-size: 5rem;
  }
}
.display-2 {
  font-size: calc(1.575rem + 3.9vw);
  font-weight: 300;
  line-height: 1.2;
}
@media (min-width: 1200px) {
  .display-2 {
    font-size: 4.5rem;
  }
}
.display-3 {
  font-size: calc(1.525rem + 3.3vw);
  font-weight: 300;
  line-height: 1.2;
}
@media (min-width: 1200px) {
  .display-3 {
    font-size: 4rem;
  }
}
.display-4 {
  font-size: calc(1.475rem + 2.7vw);
  font-weight: 300;
  line-height: 1.2;
}
@media (min-width: 1200px) {
  .display-4 {
    font-size: 3.5rem;
  }
}
.display-5 {
  font-size: calc(1.425rem + 2.1vw);
  font-weight: 300;
  line-height: 1.2;
}
@media (min-width: 1200px) {
  .display-5 {
    font-size: 3rem;
  }
}
.display-6 {
  font-size: calc(1.375rem + 1.5vw);
  font-weight: 300;
  line-height: 1.2;
}
@media (min-width: 1200px) {
  .display-6 {
    font-size: 2.5rem;
  }
}
.list-inline,
.list-unstyled {
  padding-left: 0;
  list-style: none;
}
.list-inline-item {
  display: inline-block;
}
.list-inline-item:not(:last-child) {
  margin-right: 0.5rem;
}
.initialism {
  font-size: 0.875em;
  text-transform: uppercase;
}
.blockquote {
  margin-bottom: 1rem;
  font-size: 1.25rem;
}
.blockquote > :last-child {
  margin-bottom: 0;
}
.blockquote-footer {
  margin-top: -1rem;
  margin-bottom: 1rem;
  font-size: 0.875em;
  color: #757575;
}
.blockquote-footer:before {
  content: "â€”Â ";
}
.img-fluid,
.img-thumbnail {
  max-width: 100%;
  height: auto;
}
.img-thumbnail {
  padding: 0.25rem;
  background-color: #fff;
  border: 1px solid var(--mdb-border-color);
  border-radius: 0.25rem;
  box-shadow: 0 0.125rem 0.25rem rgba(0, 0, 0, 0.075);
}
.figure {
  display: inline-block;
}
.figure-img {
  margin-bottom: 0.5rem;
  line-height: 1;
}
.figure-caption {
  font-size: 0.875em;
  color: #757575;
}
.container,
.container-fluid,
.container-lg,
.container-md,
.container-sm,
.container-xl,
.container-xxl {
  --mdb-gutter-x: 1.5rem;
  --mdb-gutter-y: 0;
  width: 100%;
  padding-right: calc(var(--mdb-gutter-x) * 0.5);
  padding-left: calc(var(--mdb-gutter-x) * 0.5);
  margin-right: auto;
  margin-left: auto;
}
@media (min-width: 576px) {
  .container,
  .container-sm {
    max-width: 540px;
  }
}
@media (min-width: 768px) {
  .container,
  .container-md,
  .container-sm {
    max-width: 720px;
  }
}
@media (min-width: 992px) {
  .container,
  .container-lg,
  .container-md,
  .container-sm {
    max-width: 960px;
  }
}
@media (min-width: 1200px) {
  .container,
  .container-lg,
  .container-md,
  .container-sm,
  .container-xl {
    max-width: 1140px;
  }
}
@media (min-width: 1400px) {
  .container,
  .container-lg,
  .container-md,
  .container-sm,
  .container-xl,
  .container-xxl {
    max-width: 1320px;
  }
}
.row {
  --mdb-gutter-x: 1.5rem;
  --mdb-gutter-y: 0;
  display: flex;
  flex-wrap: wrap;
  margin-top: calc(var(--mdb-gutter-y) * -1);
  margin-right: calc(var(--mdb-gutter-x) * -0.5);
  margin-left: calc(var(--mdb-gutter-x) * -0.5);
}
.row > * {
  flex-shrink: 0;
  width: 100%;
  max-width: 100%;
  padding-right: calc(var(--mdb-gutter-x) * 0.5);
  padding-left: calc(var(--mdb-gutter-x) * 0.5);
  margin-top: var(--mdb-gutter-y);
}
.col {
  flex: 1 0 0%;
}
.row-cols-auto > * {
  flex: 0 0 auto;
  width: auto;
}
.row-cols-1 > * {
  flex: 0 0 auto;
  width: 100%;
}
.row-cols-2 > * {
  flex: 0 0 auto;
  width: 50%;
}
.row-cols-3 > * {
  flex: 0 0 auto;
  width: 33.3333333333%;
}
.row-cols-4 > * {
  flex: 0 0 auto;
  width: 25%;
}
.row-cols-5 > * {
  flex: 0 0 auto;
  width: 20%;
}
.row-cols-6 > * {
  flex: 0 0 auto;
  width: 16.6666666667%;
}
.col-auto {
  flex: 0 0 auto;
  width: auto;
}
.col-1 {
  flex: 0 0 auto;
  width: 8.33333333%;
}
.col-2 {
  flex: 0 0 auto;
  width: 16.66666667%;
}
.col-3 {
  flex: 0 0 auto;
  width: 25%;
}
.col-4 {
  flex: 0 0 auto;
  width: 33.33333333%;
}
.col-5 {
  flex: 0 0 auto;
  width: 41.66666667%;
}
.col-6 {
  flex: 0 0 auto;
  width: 50%;
}
.col-7 {
  flex: 0 0 auto;
  width: 58.33333333%;
}
.col-8 {
  flex: 0 0 auto;
  width: 66.66666667%;
}
.col-9 {
  flex: 0 0 auto;
  width: 75%;
}
.col-10 {
  flex: 0 0 auto;
  width: 83.33333333%;
}
.col-11 {
  flex: 0 0 auto;
  width: 91.66666667%;
}
.col-12 {
  flex: 0 0 auto;
  width: 100%;
}
.offset-1 {
  margin-left: 8.33333333%;
}
.offset-2 {
  margin-left: 16.66666667%;
}
.offset-3 {
  margin-left: 25%;
}
.offset-4 {
  margin-left: 33.33333333%;
}
.offset-5 {
  margin-left: 41.66666667%;
}
.offset-6 {
  margin-left: 50%;
}
.offset-7 {
  margin-left: 58.33333333%;
}
.offset-8 {
  margin-left: 66.66666667%;
}
.offset-9 {
  margin-left: 75%;
}
.offset-10 {
  margin-left: 83.33333333%;
}
.offset-11 {
  margin-left: 91.66666667%;
}
.g-0,
.gx-0 {
  --mdb-gutter-x: 0;
}
.g-0,
.gy-0 {
  --mdb-gutter-y: 0;
}
.g-1,
.gx-1 {
  --mdb-gutter-x: 0.25rem;
}
.g-1,
.gy-1 {
  --mdb-gutter-y: 0.25rem;
}
.g-2,
.gx-2 {
  --mdb-gutter-x: 0.5rem;
}
.g-2,
.gy-2 {
  --mdb-gutter-y: 0.5rem;
}
.g-3,
.gx-3 {
  --mdb-gutter-x: 1rem;
}
.g-3,
.gy-3 {
  --mdb-gutter-y: 1rem;
}
.g-4,
.gx-4 {
  --mdb-gutter-x: 1.5rem;
}
.g-4,
.gy-4 {
  --mdb-gutter-y: 1.5rem;
}
.g-5,
.gx-5 {
  --mdb-gutter-x: 3rem;
}
.g-5,
.gy-5 {
  --mdb-gutter-y: 3rem;
}
@media (min-width: 576px) {
  .col-sm {
    flex: 1 0 0%;
  }
  .row-cols-sm-auto > * {
    flex: 0 0 auto;
    width: auto;
  }
  .row-cols-sm-1 > * {
    flex: 0 0 auto;
    width: 100%;
  }
  .row-cols-sm-2 > * {
    flex: 0 0 auto;
    width: 50%;
  }
  .row-cols-sm-3 > * {
    flex: 0 0 auto;
    width: 33.3333333333%;
  }
  .row-cols-sm-4 > * {
    flex: 0 0 auto;
    width: 25%;
  }
  .row-cols-sm-5 > * {
    flex: 0 0 auto;
    width: 20%;
  }
  .row-cols-sm-6 > * {
    flex: 0 0 auto;
    width: 16.6666666667%;
  }
  .col-sm-auto {
    flex: 0 0 auto;
    width: auto;
  }
  .col-sm-1 {
    flex: 0 0 auto;
    width: 8.33333333%;
  }
  .col-sm-2 {
    flex: 0 0 auto;
    width: 16.66666667%;
  }
  .col-sm-3 {
    flex: 0 0 auto;
    width: 25%;
  }
  .col-sm-4 {
    flex: 0 0 auto;
    width: 33.33333333%;
  }
  .col-sm-5 {
    flex: 0 0 auto;
    width: 41.66666667%;
  }
  .col-sm-6 {
    flex: 0 0 auto;
    width: 50%;
  }
  .col-sm-7 {
    flex: 0 0 auto;
    width: 58.33333333%;
  }
  .col-sm-8 {
    flex: 0 0 auto;
    width: 66.66666667%;
  }
  .col-sm-9 {
    flex: 0 0 auto;
    width: 75%;
  }
  .col-sm-10 {
    flex: 0 0 auto;
    width: 83.33333333%;
  }
  .col-sm-11 {
    flex: 0 0 auto;
    width: 91.66666667%;
  }
  .col-sm-12 {
    flex: 0 0 auto;
    width: 100%;
  }
  .offset-sm-0 {
    margin-left: 0;
  }
  .offset-sm-1 {
    margin-left: 8.33333333%;
  }
  .offset-sm-2 {
    margin-left: 16.66666667%;
  }
  .offset-sm-3 {
    margin-left: 25%;
  }
  .offset-sm-4 {
    margin-left: 33.33333333%;
  }
  .offset-sm-5 {
    margin-left: 41.66666667%;
  }
  .offset-sm-6 {
    margin-left: 50%;
  }
  .offset-sm-7 {
    margin-left: 58.33333333%;
  }
  .offset-sm-8 {
    margin-left: 66.66666667%;
  }
  .offset-sm-9 {
    margin-left: 75%;
  }
  .offset-sm-10 {
    margin-left: 83.33333333%;
  }
  .offset-sm-11 {
    margin-left: 91.66666667%;
  }
  .g-sm-0,
  .gx-sm-0 {
    --mdb-gutter-x: 0;
  }
  .g-sm-0,
  .gy-sm-0 {
    --mdb-gutter-y: 0;
  }
  .g-sm-1,
  .gx-sm-1 {
    --mdb-gutter-x: 0.25rem;
  }
  .g-sm-1,
  .gy-sm-1 {
    --mdb-gutter-y: 0.25rem;
  }
  .g-sm-2,
  .gx-sm-2 {
    --mdb-gutter-x: 0.5rem;
  }
  .g-sm-2,
  .gy-sm-2 {
    --mdb-gutter-y: 0.5rem;
  }
  .g-sm-3,
  .gx-sm-3 {
    --mdb-gutter-x: 1rem;
  }
  .g-sm-3,
  .gy-sm-3 {
    --mdb-gutter-y: 1rem;
  }
  .g-sm-4,
  .gx-sm-4 {
    --mdb-gutter-x: 1.5rem;
  }
  .g-sm-4,
  .gy-sm-4 {
    --mdb-gutter-y: 1.5rem;
  }
  .g-sm-5,
  .gx-sm-5 {
    --mdb-gutter-x: 3rem;
  }
  .g-sm-5,
  .gy-sm-5 {
    --mdb-gutter-y: 3rem;
  }
}
@media (min-width: 768px) {
  .col-md {
    flex: 1 0 0%;
  }
  .row-cols-md-auto > * {
    flex: 0 0 auto;
    width: auto;
  }
  .row-cols-md-1 > * {
    flex: 0 0 auto;
    width: 100%;
  }
  .row-cols-md-2 > * {
    flex: 0 0 auto;
    width: 50%;
  }
  .row-cols-md-3 > * {
    flex: 0 0 auto;
    width: 33.3333333333%;
  }
  .row-cols-md-4 > * {
    flex: 0 0 auto;
    width: 25%;
  }
  .row-cols-md-5 > * {
    flex: 0 0 auto;
    width: 20%;
  }
  .row-cols-md-6 > * {
    flex: 0 0 auto;
    width: 16.6666666667%;
  }
  .col-md-auto {
    flex: 0 0 auto;
    width: auto;
  }
  .col-md-1 {
    flex: 0 0 auto;
    width: 8.33333333%;
  }
  .col-md-2 {
    flex: 0 0 auto;
    width: 16.66666667%;
  }
  .col-md-3 {
    flex: 0 0 auto;
    width: 25%;
  }
  .col-md-4 {
    flex: 0 0 auto;
    width: 33.33333333%;
  }
  .col-md-5 {
    flex: 0 0 auto;
    width: 41.66666667%;
  }
  .col-md-6 {
    flex: 0 0 auto;
    width: 50%;
  }
  .col-md-7 {
    flex: 0 0 auto;
    width: 58.33333333%;
  }
  .col-md-8 {
    flex: 0 0 auto;
    width: 66.66666667%;
  }
  .col-md-9 {
    flex: 0 0 auto;
    width: 75%;
  }
  .col-md-10 {
    flex: 0 0 auto;
    width: 83.33333333%;
  }
  .col-md-11 {
    flex: 0 0 auto;
    width: 91.66666667%;
  }
  .col-md-12 {
    flex: 0 0 auto;
    width: 100%;
  }
  .offset-md-0 {
    margin-left: 0;
  }
  .offset-md-1 {
    margin-left: 8.33333333%;
  }
  .offset-md-2 {
    margin-left: 16.66666667%;
  }
  .offset-md-3 {
    margin-left: 25%;
  }
  .offset-md-4 {
    margin-left: 33.33333333%;
  }
  .offset-md-5 {
    margin-left: 41.66666667%;
  }
  .offset-md-6 {
    margin-left: 50%;
  }
  .offset-md-7 {
    margin-left: 58.33333333%;
  }
  .offset-md-8 {
    margin-left: 66.66666667%;
  }
  .offset-md-9 {
    margin-left: 75%;
  }
  .offset-md-10 {
    margin-left: 83.33333333%;
  }
  .offset-md-11 {
    margin-left: 91.66666667%;
  }
  .g-md-0,
  .gx-md-0 {
    --mdb-gutter-x: 0;
  }
  .g-md-0,
  .gy-md-0 {
    --mdb-gutter-y: 0;
  }
  .g-md-1,
  .gx-md-1 {
    --mdb-gutter-x: 0.25rem;
  }
  .g-md-1,
  .gy-md-1 {
    --mdb-gutter-y: 0.25rem;
  }
  .g-md-2,
  .gx-md-2 {
    --mdb-gutter-x: 0.5rem;
  }
  .g-md-2,
  .gy-md-2 {
    --mdb-gutter-y: 0.5rem;
  }
  .g-md-3,
  .gx-md-3 {
    --mdb-gutter-x: 1rem;
  }
  .g-md-3,
  .gy-md-3 {
    --mdb-gutter-y: 1rem;
  }
  .g-md-4,
  .gx-md-4 {
    --mdb-gutter-x: 1.5rem;
  }
  .g-md-4,
  .gy-md-4 {
    --mdb-gutter-y: 1.5rem;
  }
  .g-md-5,
  .gx-md-5 {
    --mdb-gutter-x: 3rem;
  }
  .g-md-5,
  .gy-md-5 {
    --mdb-gutter-y: 3rem;
  }
}
@media (min-width: 992px) {
  .col-lg {
    flex: 1 0 0%;
  }
  .row-cols-lg-auto > * {
    flex: 0 0 auto;
    width: auto;
  }
  .row-cols-lg-1 > * {
    flex: 0 0 auto;
    width: 100%;
  }
  .row-cols-lg-2 > * {
    flex: 0 0 auto;
    width: 50%;
  }
  .row-cols-lg-3 > * {
    flex: 0 0 auto;
    width: 33.3333333333%;
  }
  .row-cols-lg-4 > * {
    flex: 0 0 auto;
    width: 25%;
  }
  .row-cols-lg-5 > * {
    flex: 0 0 auto;
    width: 20%;
  }
  .row-cols-lg-6 > * {
    flex: 0 0 auto;
    width: 16.6666666667%;
  }
  .col-lg-auto {
    flex: 0 0 auto;
    width: auto;
  }
  .col-lg-1 {
    flex: 0 0 auto;
    width: 8.33333333%;
  }
  .col-lg-2 {
    flex: 0 0 auto;
    width: 16.66666667%;
  }
  .col-lg-3 {
    flex: 0 0 auto;
    width: 25%;
  }
  .col-lg-4 {
    flex: 0 0 auto;
    width: 33.33333333%;
  }
  .col-lg-5 {
    flex: 0 0 auto;
    width: 41.66666667%;
  }
  .col-lg-6 {
    flex: 0 0 auto;
    width: 50%;
  }
  .col-lg-7 {
    flex: 0 0 auto;
    width: 58.33333333%;
  }
  .col-lg-8 {
    flex: 0 0 auto;
    width: 66.66666667%;
  }
  .col-lg-9 {
    flex: 0 0 auto;
    width: 75%;
  }
  .col-lg-10 {
    flex: 0 0 auto;
    width: 83.33333333%;
  }
  .col-lg-11 {
    flex: 0 0 auto;
    width: 91.66666667%;
  }
  .col-lg-12 {
    flex: 0 0 auto;
    width: 100%;
  }
  .offset-lg-0 {
    margin-left: 0;
  }
  .offset-lg-1 {
    margin-left: 8.33333333%;
  }
  .offset-lg-2 {
    margin-left: 16.66666667%;
  }
  .offset-lg-3 {
    margin-left: 25%;
  }
  .offset-lg-4 {
    margin-left: 33.33333333%;
  }
  .offset-lg-5 {
    margin-left: 41.66666667%;
  }
  .offset-lg-6 {
    margin-left: 50%;
  }
  .offset-lg-7 {
    margin-left: 58.33333333%;
  }
  .offset-lg-8 {
    margin-left: 66.66666667%;
  }
  .offset-lg-9 {
    margin-left: 75%;
  }
  .offset-lg-10 {
    margin-left: 83.33333333%;
  }
  .offset-lg-11 {
    margin-left: 91.66666667%;
  }
  .g-lg-0,
  .gx-lg-0 {
    --mdb-gutter-x: 0;
  }
  .g-lg-0,
  .gy-lg-0 {
    --mdb-gutter-y: 0;
  }
  .g-lg-1,
  .gx-lg-1 {
    --mdb-gutter-x: 0.25rem;
  }
  .g-lg-1,
  .gy-lg-1 {
    --mdb-gutter-y: 0.25rem;
  }
  .g-lg-2,
  .gx-lg-2 {
    --mdb-gutter-x: 0.5rem;
  }
  .g-lg-2,
  .gy-lg-2 {
    --mdb-gutter-y: 0.5rem;
  }
  .g-lg-3,
  .gx-lg-3 {
    --mdb-gutter-x: 1rem;
  }
  .g-lg-3,
  .gy-lg-3 {
    --mdb-gutter-y: 1rem;
  }
  .g-lg-4,
  .gx-lg-4 {
    --mdb-gutter-x: 1.5rem;
  }
  .g-lg-4,
  .gy-lg-4 {
    --mdb-gutter-y: 1.5rem;
  }
  .g-lg-5,
  .gx-lg-5 {
    --mdb-gutter-x: 3rem;
  }
  .g-lg-5,
  .gy-lg-5 {
    --mdb-gutter-y: 3rem;
  }
}
@media (min-width: 1200px) {
  .col-xl {
    flex: 1 0 0%;
  }
  .row-cols-xl-auto > * {
    flex: 0 0 auto;
    width: auto;
  }
  .row-cols-xl-1 > * {
    flex: 0 0 auto;
    width: 100%;
  }
  .row-cols-xl-2 > * {
    flex: 0 0 auto;
    width: 50%;
  }
  .row-cols-xl-3 > * {
    flex: 0 0 auto;
    width: 33.3333333333%;
  }
  .row-cols-xl-4 > * {
    flex: 0 0 auto;
    width: 25%;
  }
  .row-cols-xl-5 > * {
    flex: 0 0 auto;
    width: 20%;
  }
  .row-cols-xl-6 > * {
    flex: 0 0 auto;
    width: 16.6666666667%;
  }
  .col-xl-auto {
    flex: 0 0 auto;
    width: auto;
  }
  .col-xl-1 {
    flex: 0 0 auto;
    width: 8.33333333%;
  }
  .col-xl-2 {
    flex: 0 0 auto;
    width: 16.66666667%;
  }
  .col-xl-3 {
    flex: 0 0 auto;
    width: 25%;
  }
  .col-xl-4 {
    flex: 0 0 auto;
    width: 33.33333333%;
  }
  .col-xl-5 {
    flex: 0 0 auto;
    width: 41.66666667%;
  }
  .col-xl-6 {
    flex: 0 0 auto;
    width: 50%;
  }
  .col-xl-7 {
    flex: 0 0 auto;
    width: 58.33333333%;
  }
  .col-xl-8 {
    flex: 0 0 auto;
    width: 66.66666667%;
  }
  .col-xl-9 {
    flex: 0 0 auto;
    width: 75%;
  }
  .col-xl-10 {
    flex: 0 0 auto;
    width: 83.33333333%;
  }
  .col-xl-11 {
    flex: 0 0 auto;
    width: 91.66666667%;
  }
  .col-xl-12 {
    flex: 0 0 auto;
    width: 100%;
  }
  .offset-xl-0 {
    margin-left: 0;
  }
  .offset-xl-1 {
    margin-left: 8.33333333%;
  }
  .offset-xl-2 {
    margin-left: 16.66666667%;
  }
  .offset-xl-3 {
    margin-left: 25%;
  }
  .offset-xl-4 {
    margin-left: 33.33333333%;
  }
  .offset-xl-5 {
    margin-left: 41.66666667%;
  }
  .offset-xl-6 {
    margin-left: 50%;
  }
  .offset-xl-7 {
    margin-left: 58.33333333%;
  }
  .offset-xl-8 {
    margin-left: 66.66666667%;
  }
  .offset-xl-9 {
    margin-left: 75%;
  }
  .offset-xl-10 {
    margin-left: 83.33333333%;
  }
  .offset-xl-11 {
    margin-left: 91.66666667%;
  }
  .g-xl-0,
  .gx-xl-0 {
    --mdb-gutter-x: 0;
  }
  .g-xl-0,
  .gy-xl-0 {
    --mdb-gutter-y: 0;
  }
  .g-xl-1,
  .gx-xl-1 {
    --mdb-gutter-x: 0.25rem;
  }
  .g-xl-1,
  .gy-xl-1 {
    --mdb-gutter-y: 0.25rem;
  }
  .g-xl-2,
  .gx-xl-2 {
    --mdb-gutter-x: 0.5rem;
  }
  .g-xl-2,
  .gy-xl-2 {
    --mdb-gutter-y: 0.5rem;
  }
  .g-xl-3,
  .gx-xl-3 {
    --mdb-gutter-x: 1rem;
  }
  .g-xl-3,
  .gy-xl-3 {
    --mdb-gutter-y: 1rem;
  }
  .g-xl-4,
  .gx-xl-4 {
    --mdb-gutter-x: 1.5rem;
  }
  .g-xl-4,
  .gy-xl-4 {
    --mdb-gutter-y: 1.5rem;
  }
  .g-xl-5,
  .gx-xl-5 {
    --mdb-gutter-x: 3rem;
  }
  .g-xl-5,
  .gy-xl-5 {
    --mdb-gutter-y: 3rem;
  }
}
@media (min-width: 1400px) {
  .col-xxl {
    flex: 1 0 0%;
  }
  .row-cols-xxl-auto > * {
    flex: 0 0 auto;
    width: auto;
  }
  .row-cols-xxl-1 > * {
    flex: 0 0 auto;
    width: 100%;
  }
  .row-cols-xxl-2 > * {
    flex: 0 0 auto;
    width: 50%;
  }
  .row-cols-xxl-3 > * {
    flex: 0 0 auto;
    width: 33.3333333333%;
  }
  .row-cols-xxl-4 > * {
    flex: 0 0 auto;
    width: 25%;
  }
  .row-cols-xxl-5 > * {
    flex: 0 0 auto;
    width: 20%;
  }
  .row-cols-xxl-6 > * {
    flex: 0 0 auto;
    width: 16.6666666667%;
  }
  .col-xxl-auto {
    flex: 0 0 auto;
    width: auto;
  }
  .col-xxl-1 {
    flex: 0 0 auto;
    width: 8.33333333%;
  }
  .col-xxl-2 {
    flex: 0 0 auto;
    width: 16.66666667%;
  }
  .col-xxl-3 {
    flex: 0 0 auto;
    width: 25%;
  }
  .col-xxl-4 {
    flex: 0 0 auto;
    width: 33.33333333%;
  }
  .col-xxl-5 {
    flex: 0 0 auto;
    width: 41.66666667%;
  }
  .col-xxl-6 {
    flex: 0 0 auto;
    width: 50%;
  }
  .col-xxl-7 {
    flex: 0 0 auto;
    width: 58.33333333%;
  }
  .col-xxl-8 {
    flex: 0 0 auto;
    width: 66.66666667%;
  }
  .col-xxl-9 {
    flex: 0 0 auto;
    width: 75%;
  }
  .col-xxl-10 {
    flex: 0 0 auto;
    width: 83.33333333%;
  }
  .col-xxl-11 {
    flex: 0 0 auto;
    width: 91.66666667%;
  }
  .col-xxl-12 {
    flex: 0 0 auto;
    width: 100%;
  }
  .offset-xxl-0 {
    margin-left: 0;
  }
  .offset-xxl-1 {
    margin-left: 8.33333333%;
  }
  .offset-xxl-2 {
    margin-left: 16.66666667%;
  }
  .offset-xxl-3 {
    margin-left: 25%;
  }
  .offset-xxl-4 {
    margin-left: 33.33333333%;
  }
  .offset-xxl-5 {
    margin-left: 41.66666667%;
  }
  .offset-xxl-6 {
    margin-left: 50%;
  }
  .offset-xxl-7 {
    margin-left: 58.33333333%;
  }
  .offset-xxl-8 {
    margin-left: 66.66666667%;
  }
  .offset-xxl-9 {
    margin-left: 75%;
  }
  .offset-xxl-10 {
    margin-left: 83.33333333%;
  }
  .offset-xxl-11 {
    margin-left: 91.66666667%;
  }
  .g-xxl-0,
  .gx-xxl-0 {
    --mdb-gutter-x: 0;
  }
  .g-xxl-0,
  .gy-xxl-0 {
    --mdb-gutter-y: 0;
  }
  .g-xxl-1,
  .gx-xxl-1 {
    --mdb-gutter-x: 0.25rem;
  }
  .g-xxl-1,
  .gy-xxl-1 {
    --mdb-gutter-y: 0.25rem;
  }
  .g-xxl-2,
  .gx-xxl-2 {
    --mdb-gutter-x: 0.5rem;
  }
  .g-xxl-2,
  .gy-xxl-2 {
    --mdb-gutter-y: 0.5rem;
  }
  .g-xxl-3,
  .gx-xxl-3 {
    --mdb-gutter-x: 1rem;
  }
  .g-xxl-3,
  .gy-xxl-3 {
    --mdb-gutter-y: 1rem;
  }
  .g-xxl-4,
  .gx-xxl-4 {
    --mdb-gutter-x: 1.5rem;
  }
  .g-xxl-4,
  .gy-xxl-4 {
    --mdb-gutter-y: 1.5rem;
  }
  .g-xxl-5,
  .gx-xxl-5 {
    --mdb-gutter-x: 3rem;
  }
  .g-xxl-5,
  .gy-xxl-5 {
    --mdb-gutter-y: 3rem;
  }
}
.table {
  --mdb-table-color: var(--mdb-body-color);
  --mdb-table-bg: transparent;
  --mdb-table-border-color: var(--mdb-border-color);
  --mdb-table-accent-bg: transparent;
  --mdb-table-striped-color: var(--mdb-body-color);
  --mdb-table-striped-bg: rgba(0, 0, 0, 0.02);
  --mdb-table-active-color: var(--mdb-body-color);
  --mdb-table-active-bg: rgba(0, 0, 0, 0.1);
  --mdb-table-hover-color: var(--mdb-body-color);
  --mdb-table-hover-bg: rgba(0, 0, 0, 0.025);
  width: 100%;
  margin-bottom: 1rem;
  color: var(--mdb-table-color);
  vertical-align: top;
  border-color: var(--mdb-table-border-color);
}
.table > :not(caption) > * > * {
  padding: 1rem 1.4rem;
  background-color: var(--mdb-table-bg);
  border-bottom-width: 1px;
  box-shadow: inset 0 0 0 9999px var(--mdb-table-accent-bg);
}
.table > tbody {
  vertical-align: inherit;
}
.table > thead {
  vertical-align: bottom;
}
.table-group-divider {
  border-top: 2px solid inherit;
}
.caption-top {
  caption-side: top;
}
.table-sm > :not(caption) > * > * {
  padding: 0.5rem;
}
.table-bordered > :not(caption) > * {
  border-width: 1px 0;
}
.table-bordered > :not(caption) > * > * {
  border-width: 0 1px;
}
.table-borderless > :not(caption) > * > * {
  border-bottom-width: 0;
}
.table-borderless > :not(:first-child) {
  border-top-width: 0;
}
.table-striped-columns > :not(caption) > tr > :nth-child(2n),
.table-striped > tbody > tr:nth-of-type(odd) > * {
  --mdb-table-accent-bg: var(--mdb-table-striped-bg);
  color: var(--mdb-table-striped-color);
}
.table-active {
  --mdb-table-accent-bg: var(--mdb-table-active-bg);
  color: var(--mdb-table-active-color);
}
.table-hover > tbody > tr:hover > * {
  --mdb-table-accent-bg: var(--mdb-table-hover-bg);
  color: var(--mdb-table-hover-color);
}
.table-responsive {
  overflow-x: auto;
  -webkit-overflow-scrolling: touch;
}
@media (max-width: 575.98px) {
  .table-responsive-sm {
    overflow-x: auto;
    -webkit-overflow-scrolling: touch;
  }
}
@media (max-width: 767.98px) {
  .table-responsive-md {
    overflow-x: auto;
    -webkit-overflow-scrolling: touch;
  }
}
@media (max-width: 991.98px) {
  .table-responsive-lg {
    overflow-x: auto;
    -webkit-overflow-scrolling: touch;
  }
}
@media (max-width: 1199.98px) {
  .table-responsive-xl {
    overflow-x: auto;
    -webkit-overflow-scrolling: touch;
  }
}
@media (max-width: 1399.98px) {
  .table-responsive-xxl {
    overflow-x: auto;
    -webkit-overflow-scrolling: touch;
  }
}
.form-label {
  margin-bottom: 0.5rem;
  color: rgba(0, 0, 0, 0.6);
}
.col-form-label {
  padding-top: calc(0.375rem + 1px);
  padding-bottom: calc(0.375rem + 1px);
  margin-bottom: 0;
  font-size: inherit;
  line-height: 1.6;
  color: rgba(0, 0, 0, 0.6);
}
.col-form-label-lg {
  padding-top: calc(0.5rem + 1px);
  padding-bottom: calc(0.5rem + 1px);
  font-size: 1rem;
}
.col-form-label-sm {
  padding-top: calc(0.25rem + 1px);
  padding-bottom: calc(0.25rem + 1px);
  font-size: 0.775rem;
}
.form-text {
  margin-top: 0.25rem;
  font-size: 0.875em;
  color: #757575;
}
.form-control {
  display: block;
  width: 100%;
  padding: 0.375rem 0.75rem;
  font-size: 1rem;
  font-weight: 400;
  line-height: 1.6;
  color: #4f4f4f;
  background-color: #fff;
  background-clip: padding-box;
  border: 1px solid #bdbdbd;
  -webkit-appearance: none;
  -moz-appearance: none;
  appearance: none;
  border-radius: 0.25rem;
  box-shadow: inset 0 1px 2px rgba(0, 0, 0, 0.075);
  transition: all 0.2s linear;
}
@media (prefers-reduced-motion: reduce) {
  .form-control {
    transition: none;
  }
}
.form-control[type="file"] {
  overflow: hidden;
}
.form-control[type="file"]:not(:disabled):not([readonly]) {
  cursor: pointer;
}
.form-control:focus {
  color: #4f4f4f;
  background-color: #fff;
  outline: 0;
  box-shadow: inset 0 1px 2px rgba(0, 0, 0, 0.075),
    0 0 0 0.25rem rgba(59, 113, 202, 0.25);
}
.form-control::-webkit-date-and-time-value {
  height: 1.6em;
}
.form-control::-moz-placeholder {
  color: #757575;
  opacity: 1;
}
.form-control::placeholder {
  color: #757575;
  opacity: 1;
}
.form-control:disabled {
  background-color: #eee;
  opacity: 1;
}
.form-control::file-selector-button {
  padding: 0.375rem 0.75rem;
  margin: -0.375rem -0.75rem;
  -webkit-margin-end: 0.75rem;
  margin-inline-end: 0.75rem;
  color: #4f4f4f;
  background-color: #eee;
  pointer-events: none;
  border: 0 solid;
  border-color: inherit;
  border-inline-end-width: 1px;
  border-radius: 0;
  transition: color 0.15s ease-in-out, background-color 0.15s ease-in-out,
    border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
}
@media (prefers-reduced-motion: reduce) {
  .form-control::file-selector-button {
    transition: none;
  }
}
.form-control:hover:not(:disabled):not([readonly])::file-selector-button {
  background-color: #e2e2e2;
}
.form-control-plaintext {
  display: block;
  width: 100%;
  padding: 0.375rem 0;
  margin-bottom: 0;
  line-height: 1.6;
  color: #4f4f4f;
  background-color: transparent;
  border: solid transparent;
  border-width: 1px 0;
}
.form-control-plaintext:focus {
  outline: 0;
}
.form-control-plaintext.form-control-lg,
.form-control-plaintext.form-control-sm {
  padding-right: 0;
  padding-left: 0;
}
.form-control-sm {
  min-height: calc(1.6em + 0.5rem + 2px);
  padding: 0.25rem 0.5rem;
  font-size: 0.775rem;
  border-radius: 0.25rem;
}
.form-control-sm::file-selector-button {
  padding: 0.25rem 0.5rem;
  margin: -0.25rem -0.5rem;
  -webkit-margin-end: 0.5rem;
  margin-inline-end: 0.5rem;
}
.form-control-lg {
  min-height: calc(1.6em + 1rem + 2px);
  padding: 0.5rem 1rem;
  font-size: 1rem;
  border-radius: 0.5rem;
}
.form-control-lg::file-selector-button {
  padding: 0.5rem 1rem;
  margin: -0.5rem -1rem;
  -webkit-margin-end: 1rem;
  margin-inline-end: 1rem;
}
textarea.form-control {
  min-height: calc(1.6em + 0.75rem + 2px);
}
textarea.form-control-sm {
  min-height: calc(1.6em + 0.5rem + 2px);
}
textarea.form-control-lg {
  min-height: calc(1.6em + 1rem + 2px);
}
.form-control-color {
  width: 3rem;
  height: calc(1.6em + 0.75rem + 2px);
  padding: 0.375rem;
}
.form-control-color:not(:disabled):not([readonly]) {
  cursor: pointer;
}
.form-control-color::-moz-color-swatch {
  border: 0 !important;
  border-radius: 0.25rem;
}
.form-control-color::-webkit-color-swatch {
  border-radius: 0.25rem;
}
.form-control-color.form-control-sm {
  height: calc(1.6em + 0.5rem + 2px);
}
.form-control-color.form-control-lg {
  height: calc(1.6em + 1rem + 2px);
}
.form-select {
  display: block;
  width: 100%;
  padding: 0.375rem 2.25rem 0.375rem 0.75rem;
  -moz-padding-start: calc(0.75rem - 3px);
  font-size: 1rem;
  font-weight: 400;
  line-height: 1.6;
  color: #4f4f4f;
  background-color: #fff;
  background-image: url("data:image/svg+xml;charset=utf-8,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 16 16'%3E%3Cpath fill='none' stroke='%234f4f4f' stroke-linecap='round' stroke-linejoin='round' stroke-width='2' d='M2 5l6 6 6-6'/%3E%3C/svg%3E");
  background-repeat: no-repeat;
  background-position: right 0.75rem center;
  background-size: 16px 12px;
  border: 1px solid #bdbdbd;
  border-radius: 0.25rem;
  box-shadow: inset 0 1px 2px rgba(0, 0, 0, 0.075);
  -webkit-appearance: none;
  -moz-appearance: none;
  appearance: none;
}
@media (prefers-reduced-motion: reduce) {
  .form-select {
    transition: none;
  }
}
.form-select:focus {
  box-shadow: inset 0 1px 2px rgba(0, 0, 0, 0.075),
    0 0 0 0.25rem rgba(59, 113, 202, 0.25);
}
.form-select[multiple],
.form-select[size]:not([size="1"]) {
  padding-right: 0.75rem;
  background-image: none;
}
.form-select:disabled {
  background-color: #eee;
}
.form-select:-moz-focusring {
  color: transparent;
  text-shadow: 0 0 0 #4f4f4f;
}
.form-select-sm {
  padding-top: 0.25rem;
  padding-bottom: 0.25rem;
  padding-left: 0.5rem;
  font-size: 0.775rem;
  border-radius: 0.25rem;
}
.form-select-lg {
  padding-top: 0.5rem;
  padding-bottom: 0.5rem;
  padding-left: 1rem;
  font-size: 1rem;
  border-radius: 0.5rem;
}
.form-check {
  display: block;
  min-height: 1.6rem;
  padding-left: 1.5em;
  margin-bottom: 0.125rem;
}
.form-check .form-check-input {
  float: left;
  margin-left: -1.5em;
}
.form-check-reverse {
  padding-right: 1.5em;
  padding-left: 0;
  text-align: right;
}
.form-check-reverse .form-check-input {
  float: right;
  margin-right: -1.5em;
  margin-left: 0;
}
.form-check-input {
  width: 1em;
  height: 1em;
  margin-top: 0.3em;
  vertical-align: top;
  background-repeat: no-repeat;
  background-position: 50%;
  background-size: contain;
  border: 1px solid rgba(0, 0, 0, 0.25);
  -webkit-appearance: none;
  -moz-appearance: none;
  appearance: none;
  print-color-adjust: exact;
}
.form-check-input[type="checkbox"] {
  border-radius: 0.25em;
}
.form-check-input:active {
  filter: brightness(90%);
}
.form-check-input:focus {
  border-color: #3b71ca;
  outline: 0;
  box-shadow: 0 0 0 0.25rem rgba(59, 113, 202, 0.25);
}
.form-check-input:checked {
  background-color: #3b71ca;
}
.form-check-input:checked[type="checkbox"] {
  background-image: url("data:image/svg+xml;charset=utf-8,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 20 20'%3E%3Cpath fill='none' stroke='%23fff' stroke-linecap='round' stroke-linejoin='round' stroke-width='3' d='M6 10l3 3 6-6'/%3E%3C/svg%3E");
}
.form-check-input:checked[type="radio"] {
  background-image: url("data:image/svg+xml;charset=utf-8,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='-4 -4 8 8'%3E%3Ccircle r='2' fill='%23fff'/%3E%3C/svg%3E");
}
.form-check-input[type="checkbox"]:indeterminate {
  background-color: #3b71ca;
  border-color: #757575;
  background-image: url("data:image/svg+xml;charset=utf-8,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 20 20'%3E%3Cpath fill='none' stroke='%23fff' stroke-linecap='round' stroke-linejoin='round' stroke-width='3' d='M6 10h8'/%3E%3C/svg%3E");
}
.form-check-input:disabled {
  pointer-events: none;
  filter: none;
  opacity: 0.5;
}
.form-check-input:disabled ~ .form-check-label,
.form-check-input[disabled] ~ .form-check-label {
  cursor: default;
  opacity: 0.5;
}
.form-switch {
  padding-left: 2.5em;
}
.form-switch .form-check-input {
  width: 2em;
  margin-left: -2.5em;
  background-image: url("data:image/svg+xml;charset=utf-8,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='-4 -4 8 8'%3E%3Ccircle r='3' fill='rgba(0, 0, 0, 0.25)'/%3E%3C/svg%3E");
  background-position: 0;
  border-radius: 2em;
  transition: background-position 0.15s ease-in-out;
}
@media (prefers-reduced-motion: reduce) {
  .form-switch .form-check-input {
    transition: none;
  }
}
.form-switch .form-check-input:focus {
  background-image: url("data:image/svg+xml;charset=utf-8,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='-4 -4 8 8'%3E%3Ccircle r='3' fill='%233b71ca'/%3E%3C/svg%3E");
}
.form-switch .form-check-input:checked {
  background-position: 100%;
  background-image: url("data:image/svg+xml;charset=utf-8,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='-4 -4 8 8'%3E%3Ccircle r='3' fill='%23fff'/%3E%3C/svg%3E");
}
.form-switch.form-check-reverse {
  padding-right: 2.5em;
  padding-left: 0;
}
.form-switch.form-check-reverse .form-check-input {
  margin-right: -2.5em;
  margin-left: 0;
}
.form-check-inline {
  display: inline-block;
  margin-right: 1rem;
}
.btn-check {
  position: absolute;
  clip: rect(0, 0, 0, 0);
  pointer-events: none;
}
.btn-check:disabled + .btn,
.btn-check[disabled] + .btn {
  pointer-events: none;
  filter: none;
  opacity: 0.65;
}
.form-range {
  width: 100%;
  height: 1.5rem;
  padding: 0;
  background-color: transparent;
  -webkit-appearance: none;
  -moz-appearance: none;
  appearance: none;
}
.form-range:focus {
  outline: 0;
}
.form-range:focus::-webkit-slider-thumb {
  box-shadow: 0 0 0 1px #fff, 0 0 0 0.25rem rgba(59, 113, 202, 0.25);
}
.form-range:focus::-moz-range-thumb {
  box-shadow: 0 0 0 1px #fff, 0 0 0 0.25rem rgba(59, 113, 202, 0.25);
}
.form-range::-webkit-slider-thumb {
  width: 1rem;
  height: 1rem;
  margin-top: -0.25rem;
  background-color: #3b71ca;
  border: 0;
  border-radius: 1rem;
  box-shadow: 0 0.1rem 0.25rem rgba(0, 0, 0, 0.1);
  -webkit-transition: background-color 0.15s ease-in-out,
    border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
  transition: background-color 0.15s ease-in-out, border-color 0.15s ease-in-out,
    box-shadow 0.15s ease-in-out;
}
@media (prefers-reduced-motion: reduce) {
  .form-range::-webkit-slider-thumb {
    -webkit-transition: none;
    transition: none;
  }
}
.form-range::-webkit-slider-thumb:active {
  background-color: #c4d4ef;
}
.form-range::-webkit-slider-runnable-track {
  width: 100%;
  height: 0.5rem;
  color: transparent;
  cursor: pointer;
  background-color: #e0e0e0;
  border-color: transparent;
  border-radius: 1rem;
  box-shadow: inset 0 1px 2px rgba(0, 0, 0, 0.075);
}
.form-range::-moz-range-thumb {
  width: 1rem;
  height: 1rem;
  background-color: #3b71ca;
  border: 0;
  border-radius: 1rem;
  box-shadow: 0 0.1rem 0.25rem rgba(0, 0, 0, 0.1);
  -moz-transition: background-color 0.15s ease-in-out,
    border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
  transition: background-color 0.15s ease-in-out, border-color 0.15s ease-in-out,
    box-shadow 0.15s ease-in-out;
}
@media (prefers-reduced-motion: reduce) {
  .form-range::-moz-range-thumb {
    -moz-transition: none;
    transition: none;
  }
}
.form-range::-moz-range-thumb:active {
  background-color: #c4d4ef;
}
.form-range::-moz-range-track {
  width: 100%;
  height: 0.5rem;
  color: transparent;
  cursor: pointer;
  background-color: #e0e0e0;
  border-color: transparent;
  border-radius: 1rem;
  box-shadow: inset 0 1px 2px rgba(0, 0, 0, 0.075);
}
.form-range:disabled {
  pointer-events: none;
}
.form-range:disabled::-webkit-slider-thumb {
  background-color: #9e9e9e;
}
.form-range:disabled::-moz-range-thumb {
  background-color: #9e9e9e;
}
.form-floating {
  position: relative;
}
.form-floating > .form-control,
.form-floating > .form-control-plaintext,
.form-floating > .form-select {
  height: calc(3.5rem + 2px);
  line-height: 1.25;
}
.form-floating > label {
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  padding: 1rem 0.75rem;
  overflow: hidden;
  text-align: start;
  text-overflow: ellipsis;
  white-space: nowrap;
  pointer-events: none;
  border: 1px solid transparent;
  transform-origin: 0 0;
  transition: opacity 0.1s ease-in-out, transform 0.1s ease-in-out;
}
@media (prefers-reduced-motion: reduce) {
  .form-floating > label {
    transition: none;
  }
}
.form-floating > .form-control,
.form-floating > .form-control-plaintext {
  padding: 1rem 0.75rem;
}
.form-floating > .form-control-plaintext::-moz-placeholder,
.form-floating > .form-control::-moz-placeholder {
  color: transparent;
}
.form-floating > .form-control-plaintext::placeholder,
.form-floating > .form-control::placeholder {
  color: transparent;
}
.form-floating > .form-control-plaintext:not(:-moz-placeholder-shown),
.form-floating > .form-control:not(:-moz-placeholder-shown) {
  padding-top: 1.625rem;
  padding-bottom: 0.625rem;
}
.form-floating > .form-control-plaintext:focus,
.form-floating > .form-control-plaintext:not(:placeholder-shown),
.form-floating > .form-control:focus,
.form-floating > .form-control:not(:placeholder-shown) {
  padding-top: 1.625rem;
  padding-bottom: 0.625rem;
}
.form-floating > .form-control-plaintext:-webkit-autofill,
.form-floating > .form-control:-webkit-autofill {
  padding-top: 1.625rem;
  padding-bottom: 0.625rem;
}
.form-floating > .form-select {
  padding-top: 1.625rem;
  padding-bottom: 0.625rem;
}
.form-floating > .form-control:not(:-moz-placeholder-shown) ~ label {
  opacity: 0.65;
  transform: scale(0.85) translateY(-0.5rem) translateX(0.15rem);
}
.form-floating > .form-control-plaintext ~ label,
.form-floating > .form-control:focus ~ label,
.form-floating > .form-control:not(:placeholder-shown) ~ label,
.form-floating > .form-select ~ label {
  opacity: 0.65;
  transform: scale(0.85) translateY(-0.5rem) translateX(0.15rem);
}
.form-floating > .form-control:-webkit-autofill ~ label {
  opacity: 0.65;
  transform: scale(0.85) translateY(-0.5rem) translateX(0.15rem);
}
.form-floating > .form-control-plaintext ~ label {
  border-width: 1px 0;
}
.input-group {
  position: relative;
  display: flex;
  flex-wrap: wrap;
  align-items: stretch;
  width: 100%;
}
.input-group > .form-control,
.input-group > .form-floating,
.input-group > .form-select {
  position: relative;
  flex: 1 1 auto;
  width: 1%;
  min-width: 0;
}
.input-group > .form-control:focus,
.input-group > .form-floating:focus-within,
.input-group > .form-select:focus {
  z-index: 5;
}
.input-group .btn {
  position: relative;
  z-index: 2;
}
.input-group .btn:focus {
  z-index: 5;
}
.input-group-text {
  display: flex;
  align-items: center;
  padding: 0.375rem 0.75rem;
  font-size: 1rem;
  font-weight: 400;
  line-height: 1.6;
  color: #4f4f4f;
  text-align: center;
  white-space: nowrap;
  background-color: #eee;
  border: 1px solid #bdbdbd;
  border-radius: 0.25rem;
}
.input-group-lg > .btn,
.input-group-lg > .form-control,
.input-group-lg > .form-select,
.input-group-lg > .input-group-text {
  padding: 0.5rem 1rem;
  font-size: 1rem;
  border-radius: 0.5rem;
}
.input-group-sm > .btn,
.input-group-sm > .form-control,
.input-group-sm > .form-select,
.input-group-sm > .input-group-text {
  padding: 0.25rem 0.5rem;
  font-size: 0.775rem;
  border-radius: 0.25rem;
}
.input-group-lg > .form-select,
.input-group-sm > .form-select {
  padding-right: 3rem;
}
.input-group.has-validation > .dropdown-toggle:nth-last-child(n + 4),
.input-group.has-validation
  > .form-floating:nth-last-child(n + 3)
  > .form-control,
.input-group.has-validation
  > .form-floating:nth-last-child(n + 3)
  > .form-select,
.input-group.has-validation
  > :nth-last-child(n
    + 3):not(.dropdown-toggle):not(.dropdown-menu):not(.form-floating),
.input-group:not(.has-validation) > .dropdown-toggle:nth-last-child(n + 3),
.input-group:not(.has-validation)
  > .form-floating:not(:last-child)
  > .form-control,
.input-group:not(.has-validation)
  > .form-floating:not(:last-child)
  > .form-select,
.input-group:not(.has-validation)
  > :not(:last-child):not(.dropdown-toggle):not(.dropdown-menu):not(.form-floating) {
  border-top-right-radius: 0;
  border-bottom-right-radius: 0;
}
.input-group
  > :not(:first-child):not(.dropdown-menu):not(.valid-tooltip):not(.valid-feedback):not(.invalid-tooltip):not(.invalid-feedback) {
  margin-left: -1px;
  border-top-left-radius: 0;
  border-bottom-left-radius: 0;
}
.input-group > .form-floating:not(:first-child) > .form-control,
.input-group > .form-floating:not(:first-child) > .form-select {
  border-top-left-radius: 0;
  border-bottom-left-radius: 0;
}
.valid-feedback {
  width: 100%;
  margin-top: 0.25rem;
  font-size: 0.875em;
}
.valid-tooltip {
  color: #000;
  border-radius: 0.25rem;
}
.form-control.is-valid,
.was-validated .form-control:valid {
  padding-right: calc(1.6em + 0.75rem);
  background-image: url("data:image/svg+xml;charset=utf-8,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 8 8'%3E%3Cpath fill='%2314a44d' d='M2.3 6.73L.6 4.53c-.4-1.04.46-1.4 1.1-.8l1.1 1.4 3.4-3.8c.6-.63 1.6-.27 1.2.7l-4 4.6c-.43.5-.8.4-1.1.1z'/%3E%3C/svg%3E");
  background-repeat: no-repeat;
  background-position: right calc(0.4em + 0.1875rem) center;
  background-size: calc(0.8em + 0.375rem) calc(0.8em + 0.375rem);
}
.was-validated textarea.form-control:valid,
textarea.form-control.is-valid {
  padding-right: calc(1.6em + 0.75rem);
  background-position: top calc(0.4em + 0.1875rem) right calc(0.4em + 0.1875rem);
}
.form-select.is-valid:not([multiple]):not([size]),
.form-select.is-valid:not([multiple])[size="1"],
.was-validated .form-select:valid:not([multiple]):not([size]),
.was-validated .form-select:valid:not([multiple])[size="1"] {
  padding-right: 4.125rem;
  background-image: url("data:image/svg+xml;charset=utf-8,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 16 16'%3E%3Cpath fill='none' stroke='%234f4f4f' stroke-linecap='round' stroke-linejoin='round' stroke-width='2' d='M2 5l6 6 6-6'/%3E%3C/svg%3E"),
    url("data:image/svg+xml;charset=utf-8,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 8 8'%3E%3Cpath fill='%2314a44d' d='M2.3 6.73L.6 4.53c-.4-1.04.46-1.4 1.1-.8l1.1 1.4 3.4-3.8c.6-.63 1.6-.27 1.2.7l-4 4.6c-.43.5-.8.4-1.1.1z'/%3E%3C/svg%3E");
  background-position: right 0.75rem center, center right 2.25rem;
  background-size: 16px 12px, calc(0.8em + 0.375rem) calc(0.8em + 0.375rem);
}
.form-control-color.is-valid,
.was-validated .form-control-color:valid {
  width: calc(3.75rem + 1.6em);
}
.form-check-input.is-valid:focus,
.was-validated .form-check-input:valid:focus {
  box-shadow: 0 0 0 0.25rem rgba(20, 164, 77, 0.25);
}
.input-group > .form-control:not(:focus).is-valid,
.input-group > .form-floating:not(:focus-within).is-valid,
.input-group > .form-select:not(:focus).is-valid,
.was-validated .input-group > .form-control:not(:focus):valid,
.was-validated .input-group > .form-floating:not(:focus-within):valid,
.was-validated .input-group > .form-select:not(:focus):valid {
  z-index: 3;
}
.invalid-feedback {
  width: 100%;
  margin-top: 0.25rem;
  font-size: 0.875em;
}
.invalid-tooltip {
  color: #000;
  border-radius: 0.25rem;
}
.form-control.is-invalid,
.was-validated .form-control:invalid {
  padding-right: calc(1.6em + 0.75rem);
  background-image: url("data:image/svg+xml;charset=utf-8,%3Csvg xmlns='http://www.w3.org/2000/svg' width='12' height='12' fill='none' stroke='%23dc4c64'%3E%3Ccircle cx='6' cy='6' r='4.5'/%3E%3Cpath stroke-linejoin='round' d='M5.8 3.6h.4L6 6.5z'/%3E%3Ccircle cx='6' cy='8.2' r='.6' fill='%23dc4c64' stroke='none'/%3E%3C/svg%3E");
  background-repeat: no-repeat;
  background-position: right calc(0.4em + 0.1875rem) center;
  background-size: calc(0.8em + 0.375rem) calc(0.8em + 0.375rem);
}
.was-validated textarea.form-control:invalid,
textarea.form-control.is-invalid {
  padding-right: calc(1.6em + 0.75rem);
  background-position: top calc(0.4em + 0.1875rem) right calc(0.4em + 0.1875rem);
}
.form-select.is-invalid:not([multiple]):not([size]),
.form-select.is-invalid:not([multiple])[size="1"],
.was-validated .form-select:invalid:not([multiple]):not([size]),
.was-validated .form-select:invalid:not([multiple])[size="1"] {
  padding-right: 4.125rem;
  background-image: url("data:image/svg+xml;charset=utf-8,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 16 16'%3E%3Cpath fill='none' stroke='%234f4f4f' stroke-linecap='round' stroke-linejoin='round' stroke-width='2' d='M2 5l6 6 6-6'/%3E%3C/svg%3E"),
    url("data:image/svg+xml;charset=utf-8,%3Csvg xmlns='http://www.w3.org/2000/svg' width='12' height='12' fill='none' stroke='%23dc4c64'%3E%3Ccircle cx='6' cy='6' r='4.5'/%3E%3Cpath stroke-linejoin='round' d='M5.8 3.6h.4L6 6.5z'/%3E%3Ccircle cx='6' cy='8.2' r='.6' fill='%23dc4c64' stroke='none'/%3E%3C/svg%3E");
  background-position: right 0.75rem center, center right 2.25rem;
  background-size: 16px 12px, calc(0.8em + 0.375rem) calc(0.8em + 0.375rem);
}
.form-control-color.is-invalid,
.was-validated .form-control-color:invalid {
  width: calc(3.75rem + 1.6em);
}
.form-check-input.is-invalid:focus,
.was-validated .form-check-input:invalid:focus {
  box-shadow: 0 0 0 0.25rem rgba(220, 76, 100, 0.25);
}
.input-group > .form-control:not(:focus).is-invalid,
.input-group > .form-floating:not(:focus-within).is-invalid,
.input-group > .form-select:not(:focus).is-invalid,
.was-validated .input-group > .form-control:not(:focus):invalid,
.was-validated .input-group > .form-floating:not(:focus-within):invalid,
.was-validated .input-group > .form-select:not(:focus):invalid {
  z-index: 4;
}
.btn {
  --mdb-btn-padding-x: 1.5rem;
  --mdb-btn-padding-y: 0.375rem;
  --mdb-btn-font-size: 0.75rem;
  --mdb-btn-font-weight: 500;
  --mdb-btn-line-height: 1.5;
  --mdb-btn-color: #4f4f4f;
  --mdb-btn-bg: transparent;
  --mdb-btn-border-width: 2px;
  --mdb-btn-border-color: transparent;
  --mdb-btn-hover-border-color: transparent;
  --mdb-btn-disabled-opacity: 0.65;
  --mdb-btn-focus-box-shadow: 0 0 0 0.25rem
    rgba(var(--mdb-btn-focus-shadow-rgb), 0.5);
  display: inline-block;
  padding: var(--mdb-btn-padding-y) var(--mdb-btn-padding-x);
  font-family: var(--mdb-btn-font-family);
  font-size: var(--mdb-btn-font-size);
  font-weight: var(--mdb-btn-font-weight);
  line-height: var(--mdb-btn-line-height);
  color: var(--mdb-btn-color);
  text-align: center;
  vertical-align: middle;
  cursor: pointer;
  -webkit-user-select: none;
  -moz-user-select: none;
  user-select: none;
  border: var(--mdb-btn-border-width) solid var(--mdb-btn-border-color);
  background-color: var(--mdb-btn-bg);
  transition: color 0.15s ease-in-out, background-color 0.15s ease-in-out,
    border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
}
@media (prefers-reduced-motion: reduce) {
  .btn {
    transition: none;
  }
}
.btn:hover {
  color: var(--mdb-btn-hover-color);
  background-color: var(--mdb-btn-hover-bg);
  border-color: var(--mdb-btn-hover-border-color);
}
.btn-check + .btn:hover {
  color: var(--mdb-btn-color);
  background-color: var(--mdb-btn-bg);
  border-color: var(--mdb-btn-border-color);
}
.btn:focus-visible {
  color: var(--mdb-btn-hover-color);
  background-color: var(--mdb-btn-hover-bg);
}
.btn-check:focus-visible + .btn,
.btn:focus-visible {
  border-color: var(--mdb-btn-hover-border-color);
  outline: 0;
  box-shadow: var(--mdb-btn-box-shadow), var(--mdb-btn-focus-box-shadow);
}
.btn-check:checked + .btn,
.btn.active,
.btn.show,
.btn:first-child:active,
:not(.btn-check) + .btn:active {
  color: var(--mdb-btn-active-color);
  background-color: var(--mdb-btn-active-bg);
  border-color: var(--mdb-btn-active-border-color);
  box-shadow: var(--mdb-btn-active-shadow);
}
.btn-check:checked + .btn:focus-visible,
.btn.active:focus-visible,
.btn.show:focus-visible,
.btn:first-child:active:focus-visible,
:not(.btn-check) + .btn:active:focus-visible {
  box-shadow: var(--mdb-btn-active-shadow), var(--mdb-btn-focus-box-shadow);
}
.btn.disabled,
.btn:disabled,
fieldset:disabled .btn {
  color: var(--mdb-btn-disabled-color);
  pointer-events: none;
  background-color: var(--mdb-btn-disabled-bg);
  border-color: var(--mdb-btn-disabled-border-color);
  opacity: var(--mdb-btn-disabled-opacity);
  box-shadow: none;
}
.btn-primary {
  --mdb-btn-border-color: #3b71ca;
  --mdb-btn-hover-border-color: #2f5aa2;
  --mdb-btn-focus-shadow-rgb: 88, 134, 210;
  --mdb-btn-active-border-color: #2c5598;
  --mdb-btn-active-shadow: 0 8px 9px -4px rgba(0, 0, 0, 0.15),
    0 4px 18px 0 rgba(0, 0, 0, 0.1);
  --mdb-btn-disabled-color: #fff;
  --mdb-btn-disabled-bg: #3b71ca;
  --mdb-btn-disabled-border-color: #3b71ca;
}
.btn-secondary {
  --mdb-btn-color: #000;
  --mdb-btn-bg: #9fa6b2;
  --mdb-btn-border-color: #9fa6b2;
  --mdb-btn-hover-color: #000;
  --mdb-btn-hover-bg: #adb3be;
  --mdb-btn-hover-border-color: #a9afba;
  --mdb-btn-focus-shadow-rgb: 135, 141, 151;
  --mdb-btn-active-color: #000;
  --mdb-btn-active-bg: #b2b8c1;
  --mdb-btn-active-border-color: #a9afba;
  --mdb-btn-active-shadow: 0 8px 9px -4px rgba(0, 0, 0, 0.15),
    0 4px 18px 0 rgba(0, 0, 0, 0.1);
  --mdb-btn-disabled-color: #000;
  --mdb-btn-disabled-bg: #9fa6b2;
  --mdb-btn-disabled-border-color: #9fa6b2;
}
.btn-success {
  --mdb-btn-color: #000;
  --mdb-btn-border-color: #14a44d;
  --mdb-btn-hover-color: #000;
  --mdb-btn-hover-bg: #37b268;
  --mdb-btn-hover-border-color: #2cad5f;
  --mdb-btn-focus-shadow-rgb: 17, 139, 65;
  --mdb-btn-active-color: #000;
  --mdb-btn-active-bg: #43b671;
  --mdb-btn-active-border-color: #2cad5f;
  --mdb-btn-active-shadow: 0 8px 9px -4px rgba(0, 0, 0, 0.15),
    0 4px 18px 0 rgba(0, 0, 0, 0.1);
  --mdb-btn-disabled-color: #000;
  --mdb-btn-disabled-bg: #14a44d;
  --mdb-btn-disabled-border-color: #14a44d;
}
.btn-danger {
  --mdb-btn-color: #000;
  --mdb-btn-border-color: #dc4c64;
  --mdb-btn-hover-color: #000;
  --mdb-btn-hover-bg: #e1677b;
  --mdb-btn-hover-border-color: #e05e74;
  --mdb-btn-focus-shadow-rgb: 187, 65, 85;
  --mdb-btn-active-color: #000;
  --mdb-btn-active-bg: #e37083;
  --mdb-btn-active-border-color: #e05e74;
  --mdb-btn-active-shadow: 0 8px 9px -4px rgba(0, 0, 0, 0.15),
    0 4px 18px 0 rgba(0, 0, 0, 0.1);
  --mdb-btn-disabled-color: #000;
  --mdb-btn-disabled-bg: #dc4c64;
  --mdb-btn-disabled-border-color: #dc4c64;
}
.btn-warning {
  --mdb-btn-color: #000;
  --mdb-btn-border-color: #e4a11b;
  --mdb-btn-hover-color: #000;
  --mdb-btn-hover-bg: #e8af3d;
  --mdb-btn-hover-border-color: #e7aa32;
  --mdb-btn-focus-shadow-rgb: 194, 137, 23;
  --mdb-btn-active-color: #000;
  --mdb-btn-active-bg: #e9b449;
  --mdb-btn-active-border-color: #e7aa32;
  --mdb-btn-active-shadow: 0 8px 9px -4px rgba(0, 0, 0, 0.15),
    0 4px 18px 0 rgba(0, 0, 0, 0.1);
  --mdb-btn-disabled-color: #000;
  --mdb-btn-disabled-bg: #e4a11b;
  --mdb-btn-disabled-border-color: #e4a11b;
}
.btn-info {
  --mdb-btn-color: #000;
  --mdb-btn-border-color: #54b4d3;
  --mdb-btn-hover-color: #000;
  --mdb-btn-hover-bg: #6ebfda;
  --mdb-btn-hover-border-color: #65bcd7;
  --mdb-btn-focus-shadow-rgb: 71, 153, 179;
  --mdb-btn-active-color: #000;
  --mdb-btn-active-bg: #76c3dc;
  --mdb-btn-active-border-color: #65bcd7;
  --mdb-btn-active-shadow: 0 8px 9px -4px rgba(0, 0, 0, 0.15),
    0 4px 18px 0 rgba(0, 0, 0, 0.1);
  --mdb-btn-disabled-color: #000;
  --mdb-btn-disabled-bg: #54b4d3;
  --mdb-btn-disabled-border-color: #54b4d3;
}
.btn-light {
  --mdb-btn-color: #000;
  --mdb-btn-border-color: #fbfbfb;
  --mdb-btn-hover-color: #000;
  --mdb-btn-hover-border-color: #c9c9c9;
  --mdb-btn-focus-shadow-rgb: 213, 213, 213;
  --mdb-btn-active-color: #000;
  --mdb-btn-active-border-color: #bcbcbc;
  --mdb-btn-active-shadow: 0 8px 9px -4px rgba(0, 0, 0, 0.15),
    0 4px 18px 0 rgba(0, 0, 0, 0.1);
  --mdb-btn-disabled-color: #000;
  --mdb-btn-disabled-bg: #fbfbfb;
  --mdb-btn-disabled-border-color: #fbfbfb;
}
.btn-dark {
  --mdb-btn-border-color: #332d2d;
  --mdb-btn-hover-bg: #524d4d;
  --mdb-btn-hover-border-color: #474242;
  --mdb-btn-focus-shadow-rgb: 82, 77, 77;
  --mdb-btn-active-bg: #5c5757;
  --mdb-btn-active-border-color: #474242;
  --mdb-btn-active-shadow: 0 8px 9px -4px rgba(0, 0, 0, 0.15),
    0 4px 18px 0 rgba(0, 0, 0, 0.1);
  --mdb-btn-disabled-color: #fff;
  --mdb-btn-disabled-bg: #332d2d;
  --mdb-btn-disabled-border-color: #332d2d;
}
.btn-outline-primary {
  --mdb-btn-border-color: #3b71ca;
  --mdb-btn-hover-color: #fff;
  --mdb-btn-hover-bg: #3b71ca;
  --mdb-btn-hover-border-color: #3b71ca;
  --mdb-btn-focus-shadow-rgb: 59, 113, 202;
  --mdb-btn-active-color: #fff;
  --mdb-btn-active-bg: #3b71ca;
  --mdb-btn-active-border-color: #3b71ca;
  --mdb-btn-active-shadow: 0 8px 9px -4px rgba(0, 0, 0, 0.15),
    0 4px 18px 0 rgba(0, 0, 0, 0.1);
  --mdb-btn-disabled-color: #3b71ca;
  --mdb-btn-disabled-bg: transparent;
  --mdb-btn-disabled-border-color: #3b71ca;
  --mdb-gradient: none;
}
.btn-outline-secondary {
  --mdb-btn-color: #9fa6b2;
  --mdb-btn-border-color: #9fa6b2;
  --mdb-btn-hover-color: #000;
  --mdb-btn-hover-bg: #9fa6b2;
  --mdb-btn-hover-border-color: #9fa6b2;
  --mdb-btn-focus-shadow-rgb: 159, 166, 178;
  --mdb-btn-active-color: #000;
  --mdb-btn-active-bg: #9fa6b2;
  --mdb-btn-active-border-color: #9fa6b2;
  --mdb-btn-active-shadow: 0 8px 9px -4px rgba(0, 0, 0, 0.15),
    0 4px 18px 0 rgba(0, 0, 0, 0.1);
  --mdb-btn-disabled-color: #9fa6b2;
  --mdb-btn-disabled-bg: transparent;
  --mdb-btn-disabled-border-color: #9fa6b2;
  --mdb-gradient: none;
}
.btn-outline-success {
  --mdb-btn-border-color: #14a44d;
  --mdb-btn-hover-color: #000;
  --mdb-btn-hover-bg: #14a44d;
  --mdb-btn-hover-border-color: #14a44d;
  --mdb-btn-focus-shadow-rgb: 20, 164, 77;
  --mdb-btn-active-color: #000;
  --mdb-btn-active-bg: #14a44d;
  --mdb-btn-active-border-color: #14a44d;
  --mdb-btn-active-shadow: 0 8px 9px -4px rgba(0, 0, 0, 0.15),
    0 4px 18px 0 rgba(0, 0, 0, 0.1);
  --mdb-btn-disabled-color: #14a44d;
  --mdb-btn-disabled-bg: transparent;
  --mdb-btn-disabled-border-color: #14a44d;
  --mdb-gradient: none;
}
.btn-outline-danger {
  --mdb-btn-border-color: #dc4c64;
  --mdb-btn-hover-color: #000;
  --mdb-btn-hover-bg: #dc4c64;
  --mdb-btn-hover-border-color: #dc4c64;
  --mdb-btn-focus-shadow-rgb: 220, 76, 100;
  --mdb-btn-active-color: #000;
  --mdb-btn-active-bg: #dc4c64;
  --mdb-btn-active-border-color: #dc4c64;
  --mdb-btn-active-shadow: 0 8px 9px -4px rgba(0, 0, 0, 0.15),
    0 4px 18px 0 rgba(0, 0, 0, 0.1);
  --mdb-btn-disabled-color: #dc4c64;
  --mdb-btn-disabled-bg: transparent;
  --mdb-btn-disabled-border-color: #dc4c64;
  --mdb-gradient: none;
}
.btn-outline-warning {
  --mdb-btn-border-color: #e4a11b;
  --mdb-btn-hover-color: #000;
  --mdb-btn-hover-bg: #e4a11b;
  --mdb-btn-hover-border-color: #e4a11b;
  --mdb-btn-focus-shadow-rgb: 228, 161, 27;
  --mdb-btn-active-color: #000;
  --mdb-btn-active-bg: #e4a11b;
  --mdb-btn-active-border-color: #e4a11b;
  --mdb-btn-active-shadow: 0 8px 9px -4px rgba(0, 0, 0, 0.15),
    0 4px 18px 0 rgba(0, 0, 0, 0.1);
  --mdb-btn-disabled-color: #e4a11b;
  --mdb-btn-disabled-bg: transparent;
  --mdb-btn-disabled-border-color: #e4a11b;
  --mdb-gradient: none;
}
.btn-outline-info {
  --mdb-btn-border-color: #54b4d3;
  --mdb-btn-hover-color: #000;
  --mdb-btn-hover-bg: #54b4d3;
  --mdb-btn-hover-border-color: #54b4d3;
  --mdb-btn-focus-shadow-rgb: 84, 180, 211;
  --mdb-btn-active-color: #000;
  --mdb-btn-active-bg: #54b4d3;
  --mdb-btn-active-border-color: #54b4d3;
  --mdb-btn-active-shadow: 0 8px 9px -4px rgba(0, 0, 0, 0.15),
    0 4px 18px 0 rgba(0, 0, 0, 0.1);
  --mdb-btn-disabled-color: #54b4d3;
  --mdb-btn-disabled-bg: transparent;
  --mdb-btn-disabled-border-color: #54b4d3;
  --mdb-gradient: none;
}
.btn-outline-light {
  --mdb-btn-border-color: #fbfbfb;
  --mdb-btn-hover-color: #000;
  --mdb-btn-hover-bg: #fbfbfb;
  --mdb-btn-hover-border-color: #fbfbfb;
  --mdb-btn-focus-shadow-rgb: 251, 251, 251;
  --mdb-btn-active-color: #000;
  --mdb-btn-active-bg: #fbfbfb;
  --mdb-btn-active-border-color: #fbfbfb;
  --mdb-btn-active-shadow: 0 8px 9px -4px rgba(0, 0, 0, 0.15),
    0 4px 18px 0 rgba(0, 0, 0, 0.1);
  --mdb-btn-disabled-color: #fbfbfb;
  --mdb-btn-disabled-bg: transparent;
  --mdb-btn-disabled-border-color: #fbfbfb;
  --mdb-gradient: none;
}
.btn-outline-dark {
  --mdb-btn-border-color: #332d2d;
  --mdb-btn-hover-color: #fff;
  --mdb-btn-hover-bg: #332d2d;
  --mdb-btn-hover-border-color: #332d2d;
  --mdb-btn-focus-shadow-rgb: 51, 45, 45;
  --mdb-btn-active-color: #fff;
  --mdb-btn-active-bg: #332d2d;
  --mdb-btn-active-border-color: #332d2d;
  --mdb-btn-active-shadow: 0 8px 9px -4px rgba(0, 0, 0, 0.15),
    0 4px 18px 0 rgba(0, 0, 0, 0.1);
  --mdb-btn-disabled-color: #332d2d;
  --mdb-btn-disabled-bg: transparent;
  --mdb-btn-disabled-border-color: #332d2d;
  --mdb-gradient: none;
}
.btn-link {
  --mdb-btn-font-weight: 400;
  --mdb-btn-bg: transparent;
  --mdb-btn-border-color: transparent;
  --mdb-btn-hover-border-color: transparent;
  --mdb-btn-active-color: #386bc0;
  --mdb-btn-active-border-color: transparent;
  --mdb-btn-disabled-border-color: transparent;
  --mdb-btn-focus-shadow-rgb: 88, 134, 210;
}
.btn-link:focus-visible,
.btn-link:hover {
  text-decoration: none;
}
.btn-link:focus-visible {
  color: var(--mdb-btn-color);
}
.btn-link:hover {
  color: var(--mdb-btn-hover-color);
}
.btn-group-lg > .btn,
.btn-lg {
  --mdb-btn-padding-y: 0.5rem;
  --mdb-btn-border-radius: 0.5rem;
}
.btn-group-sm > .btn,
.btn-sm {
  --mdb-btn-padding-y: 0.25rem;
  --mdb-btn-border-radius: 0.25rem;
}
.fade {
  transition: opacity 0.15s linear;
}
@media (prefers-reduced-motion: reduce) {
  .fade {
    transition: none;
  }
}
.fade:not(.show) {
  opacity: 0;
}
.collapse:not(.show) {
  display: none;
}
.collapsing {
  height: 0;
  overflow: hidden;
  transition: height 0.35s ease;
}
@media (prefers-reduced-motion: reduce) {
  .collapsing {
    transition: none;
  }
}
.collapsing.collapse-horizontal {
  width: 0;
  height: auto;
  transition: width 0.35s ease;
}
@media (prefers-reduced-motion: reduce) {
  .collapsing.collapse-horizontal {
    transition: none;
  }
}
.dropdown,
.dropdown-center,
.dropend,
.dropstart,
.dropup,
.dropup-center {
  position: relative;
}
.dropdown-toggle {
  white-space: nowrap;
}
.dropdown-toggle:after {
  display: inline-block;
  margin-left: 0.255em;
  vertical-align: 0.255em;
  content: "";
  border-top: 0.3em solid;
  border-right: 0.3em solid transparent;
  border-bottom: 0;
  border-left: 0.3em solid transparent;
}
.dropdown-toggle:empty:after {
  margin-left: 0;
}
.dropdown-menu {
  --mdb-dropdown-zindex: 1000;
  --mdb-dropdown-min-width: 10rem;
  --mdb-dropdown-padding-x: 0;
  --mdb-dropdown-padding-y: 0.5rem;
  --mdb-dropdown-spacer: 0.125rem;
  --mdb-dropdown-font-size: 0.875rem;
  --mdb-dropdown-color: #4f4f4f;
  --mdb-dropdown-bg: #fff;
  --mdb-dropdown-border-color: var(--mdb-border-color-translucent);
  --mdb-dropdown-border-radius: 0.5rem;
  --mdb-dropdown-border-width: 1px;
  --mdb-dropdown-inner-border-radius: calc(0.5rem - 1px);
  --mdb-dropdown-divider-bg: #f5f5f5;
  --mdb-dropdown-divider-margin-y: 0.5rem;
  --mdb-dropdown-box-shadow: 0 2px 15px -3px rgba(0, 0, 0, 0.07),
    0 10px 20px -2px rgba(0, 0, 0, 0.04);
  --mdb-dropdown-link-color: #262626;
  --mdb-dropdown-link-hover-color: #222;
  --mdb-dropdown-link-hover-bg: #eee;
  --mdb-dropdown-link-active-color: #fff;
  --mdb-dropdown-link-active-bg: #3b71ca;
  --mdb-dropdown-link-disabled-color: #9e9e9e;
  --mdb-dropdown-item-padding-x: 1rem;
  --mdb-dropdown-item-padding-y: 0.5rem;
  --mdb-dropdown-header-color: #757575;
  --mdb-dropdown-header-padding-x: 1rem;
  --mdb-dropdown-header-padding-y: 0.5rem;
  position: absolute;
  z-index: var(--mdb-dropdown-zindex);
  display: none;
  min-width: var(--mdb-dropdown-min-width);
  padding: var(--mdb-dropdown-padding-y) var(--mdb-dropdown-padding-x);
  text-align: left;
  list-style: none;
  background-color: var(--mdb-dropdown-bg);
  background-clip: padding-box;
  border: var(--mdb-dropdown-border-width) solid
    var(--mdb-dropdown-border-color);
  border-radius: var(--mdb-dropdown-border-radius);
}
.dropdown-menu[data-mdb-popper] {
  top: 100%;
  left: 0;
  margin-top: var(--mdb-dropdown-spacer);
}
.dropdown-menu-start {
  --mdb-position: start;
}
.dropdown-menu-start[data-mdb-popper] {
  right: auto;
  left: 0;
}
.dropdown-menu-end {
  --mdb-position: end;
}
.dropdown-menu-end[data-mdb-popper] {
  right: 0;
  left: auto;
}
@media (min-width: 576px) {
  .dropdown-menu-sm-start {
    --mdb-position: start;
  }
  .dropdown-menu-sm-start[data-mdb-popper] {
    right: auto;
    left: 0;
  }
  .dropdown-menu-sm-end {
    --mdb-position: end;
  }
  .dropdown-menu-sm-end[data-mdb-popper] {
    right: 0;
    left: auto;
  }
}
@media (min-width: 768px) {
  .dropdown-menu-md-start {
    --mdb-position: start;
  }
  .dropdown-menu-md-start[data-mdb-popper] {
    right: auto;
    left: 0;
  }
  .dropdown-menu-md-end {
    --mdb-position: end;
  }
  .dropdown-menu-md-end[data-mdb-popper] {
    right: 0;
    left: auto;
  }
}
@media (min-width: 992px) {
  .dropdown-menu-lg-start {
    --mdb-position: start;
  }
  .dropdown-menu-lg-start[data-mdb-popper] {
    right: auto;
    left: 0;
  }
  .dropdown-menu-lg-end {
    --mdb-position: end;
  }
  .dropdown-menu-lg-end[data-mdb-popper] {
    right: 0;
    left: auto;
  }
}
@media (min-width: 1200px) {
  .dropdown-menu-xl-start {
    --mdb-position: start;
  }
  .dropdown-menu-xl-start[data-mdb-popper] {
    right: auto;
    left: 0;
  }
  .dropdown-menu-xl-end {
    --mdb-position: end;
  }
  .dropdown-menu-xl-end[data-mdb-popper] {
    right: 0;
    left: auto;
  }
}
@media (min-width: 1400px) {
  .dropdown-menu-xxl-start {
    --mdb-position: start;
  }
  .dropdown-menu-xxl-start[data-mdb-popper] {
    right: auto;
    left: 0;
  }
  .dropdown-menu-xxl-end {
    --mdb-position: end;
  }
  .dropdown-menu-xxl-end[data-mdb-popper] {
    right: 0;
    left: auto;
  }
}
.dropup .dropdown-menu[data-mdb-popper] {
  top: auto;
  bottom: 100%;
  margin-top: 0;
  margin-bottom: var(--mdb-dropdown-spacer);
}
.dropup .dropdown-toggle:after {
  display: inline-block;
  margin-left: 0.255em;
  vertical-align: 0.255em;
  content: "";
  border-top: 0;
  border-right: 0.3em solid transparent;
  border-bottom: 0.3em solid;
  border-left: 0.3em solid transparent;
}
.dropup .dropdown-toggle:empty:after {
  margin-left: 0;
}
.dropend .dropdown-menu[data-mdb-popper] {
  top: 0;
  right: auto;
  left: 100%;
  margin-top: 0;
  margin-left: var(--mdb-dropdown-spacer);
}
.dropend .dropdown-toggle:after {
  display: inline-block;
  margin-left: 0.255em;
  vertical-align: 0.255em;
  content: "";
  border-top: 0.3em solid transparent;
  border-right: 0;
  border-bottom: 0.3em solid transparent;
  border-left: 0.3em solid;
}
.dropend .dropdown-toggle:empty:after {
  margin-left: 0;
}
.dropend .dropdown-toggle:after {
  vertical-align: 0;
}
.dropstart .dropdown-menu[data-mdb-popper] {
  top: 0;
  right: 100%;
  left: auto;
  margin-top: 0;
  margin-right: var(--mdb-dropdown-spacer);
}
.dropstart .dropdown-toggle:after {
  display: inline-block;
  margin-left: 0.255em;
  vertical-align: 0.255em;
  content: "";
  display: none;
}
.dropstart .dropdown-toggle:before {
  display: inline-block;
  margin-right: 0.255em;
  vertical-align: 0.255em;
  content: "";
  border-top: 0.3em solid transparent;
  border-right: 0.3em solid;
  border-bottom: 0.3em solid transparent;
}
.dropstart .dropdown-toggle:empty:after {
  margin-left: 0;
}
.dropstart .dropdown-toggle:before {
  vertical-align: 0;
}
.dropdown-divider {
  height: 0;
  margin: var(--mdb-dropdown-divider-margin-y) 0;
  overflow: hidden;
  border-top: 1px solid var(--mdb-dropdown-divider-bg);
}
.dropdown-item {
  display: block;
  width: 100%;
  clear: both;
  font-weight: 400;
  color: var(--mdb-dropdown-link-color);
  text-align: inherit;
  white-space: nowrap;
  background-color: transparent;
  border: 0;
}
.dropdown-item:focus,
.dropdown-item:hover {
  color: var(--mdb-dropdown-link-hover-color);
  background-color: var(--mdb-dropdown-link-hover-bg);
}
.dropdown-item.active,
.dropdown-item:active {
  color: var(--mdb-dropdown-link-active-color);
  text-decoration: none;
  background-color: var(--mdb-dropdown-link-active-bg);
}
.dropdown-item.disabled,
.dropdown-item:disabled {
  color: var(--mdb-dropdown-link-disabled-color);
  pointer-events: none;
  background-color: transparent;
}
.dropdown-menu.show {
  display: block;
}
.dropdown-header {
  display: block;
  padding: var(--mdb-dropdown-header-padding-y)
    var(--mdb-dropdown-header-padding-x);
  margin-bottom: 0;
  font-size: 0.875rem;
  color: var(--mdb-dropdown-header-color);
  white-space: nowrap;
}
.dropdown-item-text {
  display: block;
  padding: var(--mdb-dropdown-item-padding-y) var(--mdb-dropdown-item-padding-x);
  color: var(--mdb-dropdown-link-color);
}
.dropdown-menu-dark {
  --mdb-dropdown-color: #e0e0e0;
  --mdb-dropdown-bg: #4f4f4f;
  --mdb-dropdown-border-color: var(--mdb-border-color-translucent);
  --mdb-dropdown-link-color: #e0e0e0;
  --mdb-dropdown-link-hover-color: #fff;
  --mdb-dropdown-divider-bg: #f5f5f5;
  --mdb-dropdown-link-hover-bg: hsla(0, 0%, 100%, 0.15);
  --mdb-dropdown-link-active-color: #fff;
  --mdb-dropdown-link-active-bg: #3b71ca;
  --mdb-dropdown-link-disabled-color: #9e9e9e;
  --mdb-dropdown-header-color: #9e9e9e;
}
.btn-group,
.btn-group-vertical {
  position: relative;
  display: inline-flex;
  vertical-align: middle;
}
.btn-group-vertical > .btn,
.btn-group > .btn {
  position: relative;
  flex: 1 1 auto;
}
.btn-group-vertical > .btn-check:checked + .btn,
.btn-group-vertical > .btn-check:focus + .btn,
.btn-group-vertical > .btn.active,
.btn-group-vertical > .btn:active,
.btn-group-vertical > .btn:focus,
.btn-group-vertical > .btn:hover,
.btn-group > .btn-check:checked + .btn,
.btn-group > .btn-check:focus + .btn,
.btn-group > .btn.active,
.btn-group > .btn:active,
.btn-group > .btn:focus,
.btn-group > .btn:hover {
  z-index: 1;
}
.btn-toolbar {
  display: flex;
  flex-wrap: wrap;
  justify-content: flex-start;
}
.btn-toolbar .input-group {
  width: auto;
}
.btn-group {
  border-radius: 0.25rem;
}
.btn-group > .btn-group:not(:first-child),
.btn-group > :not(.btn-check:first-child) + .btn {
  margin-left: -2px;
}
.btn-group > .btn-group:not(:last-child) > .btn,
.btn-group > .btn.dropdown-toggle-split:first-child,
.btn-group > .btn:not(:last-child):not(.dropdown-toggle) {
  border-top-right-radius: 0;
  border-bottom-right-radius: 0;
}
.btn-group > .btn-group:not(:first-child) > .btn,
.btn-group > .btn:nth-child(n + 3),
.btn-group > :not(.btn-check) + .btn {
  border-top-left-radius: 0;
  border-bottom-left-radius: 0;
}
.dropdown-toggle-split {
  padding-right: 1.125rem;
  padding-left: 1.125rem;
}
.dropdown-toggle-split:after,
.dropend .dropdown-toggle-split:after,
.dropup .dropdown-toggle-split:after {
  margin-left: 0;
}
.dropstart .dropdown-toggle-split:before {
  margin-right: 0;
}
.btn-group-sm > .btn + .dropdown-toggle-split,
.btn-sm + .dropdown-toggle-split {
  padding-right: 0.75rem;
  padding-left: 0.75rem;
}
.btn-group-lg > .btn + .dropdown-toggle-split,
.btn-lg + .dropdown-toggle-split {
  padding-right: 1.265625rem;
  padding-left: 1.265625rem;
}
.btn-group.show .dropdown-toggle {
  box-shadow: 0 8px 9px -4px rgba(0, 0, 0, 0.15),
    0 4px 18px 0 rgba(0, 0, 0, 0.1);
}
.btn-group.show .dropdown-toggle.btn-link {
  box-shadow: none;
}
.btn-group-vertical {
  flex-direction: column;
  align-items: flex-start;
  justify-content: center;
}
.btn-group-vertical > .btn,
.btn-group-vertical > .btn-group {
  width: 100%;
}
.btn-group-vertical > .btn-group:not(:first-child),
.btn-group-vertical > .btn:not(:first-child) {
  margin-top: -2px;
}
.btn-group-vertical > .btn-group:not(:last-child) > .btn,
.btn-group-vertical > .btn:not(:last-child):not(.dropdown-toggle) {
  border-bottom-right-radius: 0;
  border-bottom-left-radius: 0;
}
.btn-group-vertical > .btn-group:not(:first-child) > .btn,
.btn-group-vertical > .btn ~ .btn {
  border-top-left-radius: 0;
  border-top-right-radius: 0;
}
.nav {
  --mdb-nav-link-padding-x: 1rem;
  --mdb-nav-link-padding-y: 0.5rem;
  --mdb-nav-link-color: var(--mdb-link-color);
  --mdb-nav-link-hover-color: var(--mdb-link-hover-color);
  --mdb-nav-link-disabled-color: #757575;
  display: flex;
  flex-wrap: wrap;
  padding-left: 0;
  margin-bottom: 0;
  list-style: none;
}
.nav-link {
  display: block;
  padding: var(--mdb-nav-link-padding-y) var(--mdb-nav-link-padding-x);
  font-size: var(--mdb-nav-link-font-size);
  font-weight: var(--mdb-nav-link-font-weight);
  color: var(--mdb-nav-link-color);
  transition: color 0.15s ease-in-out, background-color 0.15s ease-in-out,
    border-color 0.15s ease-in-out;
}
@media (prefers-reduced-motion: reduce) {
  .nav-link {
    transition: none;
  }
}
.nav-link:focus,
.nav-link:hover {
  color: var(--mdb-nav-link-hover-color);
}
.nav-link.disabled {
  color: var(--mdb-nav-link-disabled-color);
  pointer-events: none;
  cursor: default;
}
.nav-tabs {
  --mdb-nav-tabs-border-width: 1px;
  --mdb-nav-tabs-border-color: #e0e0e0;
  --mdb-nav-tabs-border-radius: 0.25rem;
  --mdb-nav-tabs-link-hover-border-color: #eee #eee #e0e0e0;
  --mdb-nav-tabs-link-active-color: #3b71ca;
  --mdb-nav-tabs-link-active-bg: #fff;
  --mdb-nav-tabs-link-active-border-color: #3b71ca;
  border-bottom: var(--mdb-nav-tabs-border-width) solid
    var(--mdb-nav-tabs-border-color);
}
.nav-tabs .nav-link {
  margin-bottom: calc(var(--mdb-nav-tabs-border-width) * -1);
  background: none;
  border: var(--mdb-nav-tabs-border-width) solid transparent;
  border-top-left-radius: var(--mdb-nav-tabs-border-radius);
  border-top-right-radius: var(--mdb-nav-tabs-border-radius);
}
.nav-tabs .nav-link:focus,
.nav-tabs .nav-link:hover {
  isolation: isolate;
  border-color: var(--mdb-nav-tabs-link-hover-border-color);
}
.nav-tabs .nav-link.disabled,
.nav-tabs .nav-link:disabled {
  color: var(--mdb-nav-link-disabled-color);
  background-color: transparent;
  border-color: transparent;
}
.nav-tabs .nav-item.show .nav-link,
.nav-tabs .nav-link.active {
  background-color: var(--mdb-nav-tabs-link-active-bg);
}
.nav-tabs .dropdown-menu {
  margin-top: calc(var(--mdb-nav-tabs-border-width) * -1);
  border-top-left-radius: 0;
  border-top-right-radius: 0;
}
.nav-pills {
  --mdb-nav-pills-border-radius: 0.25rem;
  --mdb-nav-pills-link-active-color: #285192;
  --mdb-nav-pills-link-active-bg: #e3ebf7;
}
.nav-pills .nav-link {
  background: none;
  border: 0;
  border-radius: var(--mdb-nav-pills-border-radius);
}
.nav-pills .nav-link:disabled {
  color: var(--mdb-nav-link-disabled-color);
  background-color: transparent;
  border-color: transparent;
}
.nav-fill .nav-item,
.nav-fill > .nav-link {
  flex: 1 1 auto;
  text-align: center;
}
.nav-justified .nav-item,
.nav-justified > .nav-link {
  flex-basis: 0;
  flex-grow: 1;
  text-align: center;
}
.nav-fill .nav-item .nav-link,
.nav-justified .nav-item .nav-link {
  width: 100%;
}
.tab-content > .tab-pane {
  display: none;
}
.tab-content > .active {
  display: block;
}
.navbar {
  --mdb-navbar-padding-x: 0;
  --mdb-navbar-padding-y: 0.5rem;
  --mdb-navbar-color: rgba(0, 0, 0, 0.55);
  --mdb-navbar-hover-color: rgba(0, 0, 0, 0.7);
  --mdb-navbar-disabled-color: rgba(0, 0, 0, 0.3);
  --mdb-navbar-active-color: rgba(0, 0, 0, 0.9);
  --mdb-navbar-brand-padding-y: 0.3rem;
  --mdb-navbar-brand-margin-end: 1rem;
  --mdb-navbar-brand-font-size: 1.25rem;
  --mdb-navbar-brand-color: rgba(0, 0, 0, 0.9);
  --mdb-navbar-brand-hover-color: rgba(0, 0, 0, 0.9);
  --mdb-navbar-nav-link-padding-x: 0.5rem;
  --mdb-navbar-toggler-padding-y: 0.25rem;
  --mdb-navbar-toggler-padding-x: 0.75rem;
  --mdb-navbar-toggler-font-size: 1.25rem;
  --mdb-navbar-toggler-icon-bg: url("data:image/svg+xml;charset=utf-8,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 30 30'%3E%3Cpath stroke='rgba(0, 0, 0, 0.55)' stroke-linecap='round' stroke-miterlimit='10' stroke-width='2' d='M4 7h22M4 15h22M4 23h22'/%3E%3C/svg%3E");
  --mdb-navbar-toggler-border-color: rgba(0, 0, 0, 0.1);
  --mdb-navbar-toggler-border-radius: 0.25rem;
  --mdb-navbar-toggler-focus-width: 0.25rem;
  --mdb-navbar-toggler-transition: box-shadow 0.15s ease-in-out;
  position: relative;
  display: flex;
  flex-wrap: wrap;
  align-items: center;
  justify-content: space-between;
  padding: var(--mdb-navbar-padding-y) var(--mdb-navbar-padding-x);
}
.navbar > .container,
.navbar > .container-fluid,
.navbar > .container-lg,
.navbar > .container-md,
.navbar > .container-sm,
.navbar > .container-xl,
.navbar > .container-xxl {
  display: flex;
  flex-wrap: inherit;
  align-items: center;
  justify-content: space-between;
}
.navbar-brand {
  padding-top: var(--mdb-navbar-brand-padding-y);
  padding-bottom: var(--mdb-navbar-brand-padding-y);
  margin-right: var(--mdb-navbar-brand-margin-end);
  font-size: var(--mdb-navbar-brand-font-size);
  color: var(--mdb-navbar-brand-color);
  white-space: nowrap;
}
.navbar-brand:focus,
.navbar-brand:hover {
  color: var(--mdb-navbar-brand-hover-color);
}
.navbar-nav {
  --mdb-nav-link-padding-x: 0;
  --mdb-nav-link-padding-y: 0.5rem;
  --mdb-nav-link-color: var(--mdb-navbar-color);
  --mdb-nav-link-hover-color: var(--mdb-navbar-hover-color);
  --mdb-nav-link-disabled-color: var(--mdb-navbar-disabled-color);
  display: flex;
  flex-direction: column;
  padding-left: 0;
  margin-bottom: 0;
  list-style: none;
}
.navbar-nav .nav-link.active,
.navbar-nav .show > .nav-link {
  color: var(--mdb-navbar-active-color);
}
.navbar-nav .dropdown-menu {
  position: static;
}
.navbar-text {
  padding-top: 0.5rem;
  padding-bottom: 0.5rem;
  color: var(--mdb-navbar-color);
}
.navbar-text a,
.navbar-text a:focus,
.navbar-text a:hover {
  color: var(--mdb-navbar-active-color);
}
.navbar-collapse {
  flex-basis: 100%;
  flex-grow: 1;
  align-items: center;
}
.navbar-toggler {
  padding: var(--mdb-navbar-toggler-padding-y)
    var(--mdb-navbar-toggler-padding-x);
  font-size: var(--mdb-navbar-toggler-font-size);
  line-height: 1;
  color: var(--mdb-navbar-color);
  background-color: transparent;
  border: var(--mdb-border-width) solid var(--mdb-navbar-toggler-border-color);
  border-radius: var(--mdb-navbar-toggler-border-radius);
  transition: var(--mdb-navbar-toggler-transition);
}
@media (prefers-reduced-motion: reduce) {
  .navbar-toggler {
    transition: none;
  }
}
.navbar-toggler:hover {
  text-decoration: none;
}
.navbar-toggler:focus {
  text-decoration: none;
  outline: 0;
  box-shadow: 0 0 0 var(--mdb-navbar-toggler-focus-width);
}
.navbar-toggler-icon {
  display: inline-block;
  width: 1.5em;
  height: 1.5em;
  vertical-align: middle;
  background-image: var(--mdb-navbar-toggler-icon-bg);
  background-repeat: no-repeat;
  background-position: 50%;
  background-size: 100%;
}
.navbar-nav-scroll {
  max-height: var(--mdb-scroll-height, 75vh);
  overflow-y: auto;
}
@media (min-width: 576px) {
  .navbar-expand-sm {
    flex-wrap: nowrap;
    justify-content: flex-start;
  }
  .navbar-expand-sm .navbar-nav {
    flex-direction: row;
  }
  .navbar-expand-sm .navbar-nav .dropdown-menu {
    position: absolute;
  }
  .navbar-expand-sm .navbar-nav .nav-link {
    padding-right: var(--mdb-navbar-nav-link-padding-x);
    padding-left: var(--mdb-navbar-nav-link-padding-x);
  }
  .navbar-expand-sm .navbar-nav-scroll {
    overflow: visible;
  }
  .navbar-expand-sm .navbar-collapse {
    display: flex !important;
    flex-basis: auto;
  }
  .navbar-expand-sm .navbar-toggler {
    display: none;
  }
  .navbar-expand-sm .offcanvas {
    position: static;
    z-index: auto;
    flex-grow: 1;
    width: auto !important;
    height: auto !important;
    visibility: visible !important;
    background-color: transparent !important;
    border: 0 !important;
    transform: none !important;
    box-shadow: none;
    transition: none;
  }
  .navbar-expand-sm .offcanvas .offcanvas-header {
    display: none;
  }
  .navbar-expand-sm .offcanvas .offcanvas-body {
    display: flex;
    flex-grow: 0;
    padding: 0;
    overflow-y: visible;
  }
}
@media (min-width: 768px) {
  .navbar-expand-md {
    flex-wrap: nowrap;
    justify-content: flex-start;
  }
  .navbar-expand-md .navbar-nav {
    flex-direction: row;
  }
  .navbar-expand-md .navbar-nav .dropdown-menu {
    position: absolute;
  }
  .navbar-expand-md .navbar-nav .nav-link {
    padding-right: var(--mdb-navbar-nav-link-padding-x);
    padding-left: var(--mdb-navbar-nav-link-padding-x);
  }
  .navbar-expand-md .navbar-nav-scroll {
    overflow: visible;
  }
  .navbar-expand-md .navbar-collapse {
    display: flex !important;
    flex-basis: auto;
  }
  .navbar-expand-md .navbar-toggler {
    display: none;
  }
  .navbar-expand-md .offcanvas {
    position: static;
    z-index: auto;
    flex-grow: 1;
    width: auto !important;
    height: auto !important;
    visibility: visible !important;
    background-color: transparent !important;
    border: 0 !important;
    transform: none !important;
    box-shadow: none;
    transition: none;
  }
  .navbar-expand-md .offcanvas .offcanvas-header {
    display: none;
  }
  .navbar-expand-md .offcanvas .offcanvas-body {
    display: flex;
    flex-grow: 0;
    padding: 0;
    overflow-y: visible;
  }
}
@media (min-width: 992px) {
  .navbar-expand-lg {
    flex-wrap: nowrap;
    justify-content: flex-start;
  }
  .navbar-expand-lg .navbar-nav {
    flex-direction: row;
  }
  .navbar-expand-lg .navbar-nav .dropdown-menu {
    position: absolute;
  }
  .navbar-expand-lg .navbar-nav .nav-link {
    padding-right: var(--mdb-navbar-nav-link-padding-x);
    padding-left: var(--mdb-navbar-nav-link-padding-x);
  }
  .navbar-expand-lg .navbar-nav-scroll {
    overflow: visible;
  }
  .navbar-expand-lg .navbar-collapse {
    display: flex !important;
    flex-basis: auto;
  }
  .navbar-expand-lg .navbar-toggler {
    display: none;
  }
  .navbar-expand-lg .offcanvas {
    position: static;
    z-index: auto;
    flex-grow: 1;
    width: auto !important;
    height: auto !important;
    visibility: visible !important;
    background-color: transparent !important;
    border: 0 !important;
    transform: none !important;
    box-shadow: none;
    transition: none;
  }
  .navbar-expand-lg .offcanvas .offcanvas-header {
    display: none;
  }
  .navbar-expand-lg .offcanvas .offcanvas-body {
    display: flex;
    flex-grow: 0;
    padding: 0;
    overflow-y: visible;
  }
}
@media (min-width: 1200px) {
  .navbar-expand-xl {
    flex-wrap: nowrap;
    justify-content: flex-start;
  }
  .navbar-expand-xl .navbar-nav {
    flex-direction: row;
  }
  .navbar-expand-xl .navbar-nav .dropdown-menu {
    position: absolute;
  }
  .navbar-expand-xl .navbar-nav .nav-link {
    padding-right: var(--mdb-navbar-nav-link-padding-x);
    padding-left: var(--mdb-navbar-nav-link-padding-x);
  }
  .navbar-expand-xl .navbar-nav-scroll {
    overflow: visible;
  }
  .navbar-expand-xl .navbar-collapse {
    display: flex !important;
    flex-basis: auto;
  }
  .navbar-expand-xl .navbar-toggler {
    display: none;
  }
  .navbar-expand-xl .offcanvas {
    position: static;
    z-index: auto;
    flex-grow: 1;
    width: auto !important;
    height: auto !important;
    visibility: visible !important;
    background-color: transparent !important;
    border: 0 !important;
    transform: none !important;
    box-shadow: none;
    transition: none;
  }
  .navbar-expand-xl .offcanvas .offcanvas-header {
    display: none;
  }
  .navbar-expand-xl .offcanvas .offcanvas-body {
    display: flex;
    flex-grow: 0;
    padding: 0;
    overflow-y: visible;
  }
}
@media (min-width: 1400px) {
  .navbar-expand-xxl {
    flex-wrap: nowrap;
    justify-content: flex-start;
  }
  .navbar-expand-xxl .navbar-nav {
    flex-direction: row;
  }
  .navbar-expand-xxl .navbar-nav .dropdown-menu {
    position: absolute;
  }
  .navbar-expand-xxl .navbar-nav .nav-link {
    padding-right: var(--mdb-navbar-nav-link-padding-x);
    padding-left: var(--mdb-navbar-nav-link-padding-x);
  }
  .navbar-expand-xxl .navbar-nav-scroll {
    overflow: visible;
  }
  .navbar-expand-xxl .navbar-collapse {
    display: flex !important;
    flex-basis: auto;
  }
  .navbar-expand-xxl .navbar-toggler {
    display: none;
  }
  .navbar-expand-xxl .offcanvas {
    position: static;
    z-index: auto;
    flex-grow: 1;
    width: auto !important;
    height: auto !important;
    visibility: visible !important;
    background-color: transparent !important;
    border: 0 !important;
    transform: none !important;
    box-shadow: none;
    transition: none;
  }
  .navbar-expand-xxl .offcanvas .offcanvas-header {
    display: none;
  }
  .navbar-expand-xxl .offcanvas .offcanvas-body {
    display: flex;
    flex-grow: 0;
    padding: 0;
    overflow-y: visible;
  }
}
.navbar-expand {
  flex-wrap: nowrap;
  justify-content: flex-start;
}
.navbar-expand .navbar-nav {
  flex-direction: row;
}
.navbar-expand .navbar-nav .dropdown-menu {
  position: absolute;
}
.navbar-expand .navbar-nav .nav-link {
  padding-right: var(--mdb-navbar-nav-link-padding-x);
  padding-left: var(--mdb-navbar-nav-link-padding-x);
}
.navbar-expand .navbar-nav-scroll {
  overflow: visible;
}
.navbar-expand .navbar-collapse {
  display: flex !important;
  flex-basis: auto;
}
.navbar-expand .navbar-toggler {
  display: none;
}
.navbar-expand .offcanvas {
  position: static;
  z-index: auto;
  flex-grow: 1;
  width: auto !important;
  height: auto !important;
  visibility: visible !important;
  background-color: transparent !important;
  border: 0 !important;
  transform: none !important;
  box-shadow: none;
  transition: none;
}
.navbar-expand .offcanvas .offcanvas-header {
  display: none;
}
.navbar-expand .offcanvas .offcanvas-body {
  display: flex;
  flex-grow: 0;
  padding: 0;
  overflow-y: visible;
}
.navbar-dark {
  --mdb-navbar-color: hsla(0, 0%, 100%, 0.55);
  --mdb-navbar-hover-color: hsla(0, 0%, 100%, 0.75);
  --mdb-navbar-disabled-color: hsla(0, 0%, 100%, 0.25);
  --mdb-navbar-active-color: #fff;
  --mdb-navbar-brand-color: #fff;
  --mdb-navbar-brand-hover-color: #fff;
  --mdb-navbar-toggler-border-color: hsla(0, 0%, 100%, 0.1);
  --mdb-navbar-toggler-icon-bg: url("data:image/svg+xml;charset=utf-8,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 30 30'%3E%3Cpath stroke='rgba(255, 255, 255, 0.55)' stroke-linecap='round' stroke-miterlimit='10' stroke-width='2' d='M4 7h22M4 15h22M4 23h22'/%3E%3C/svg%3E");
}
.card {
  --mdb-card-spacer-y: 1.5rem;
  --mdb-card-spacer-x: 1.5rem;
  --mdb-card-title-spacer-y: 0.5rem;
  --mdb-card-border-width: 1px;
  --mdb-card-border-color: var(--mdb-border-color-translucent);
  --mdb-card-border-radius: 0.5rem;
  --mdb-card-box-shadow: 0 2px 15px -3px rgba(0, 0, 0, 0.07),
    0 10px 20px -2px rgba(0, 0, 0, 0.04);
  --mdb-card-inner-border-radius: calc(0.5rem - 1px);
  --mdb-card-cap-padding-y: 0.75rem;
  --mdb-card-cap-padding-x: 1.5rem;
  --mdb-card-cap-bg: hsla(0, 0%, 100%, 0);
  --mdb-card-bg: #fff;
  --mdb-card-img-overlay-padding: 1.5rem;
  --mdb-card-group-margin: 0.75rem;
  position: relative;
  display: flex;
  flex-direction: column;
  min-width: 0;
  height: var(--mdb-card-height);
  word-wrap: break-word;
  background-color: var(--mdb-card-bg);
  background-clip: border-box;
  border: var(--mdb-card-border-width) solid var(--mdb-card-border-color);
  border-radius: var(--mdb-card-border-radius);
  box-shadow: var(--mdb-card-box-shadow);
}
.card > hr {
  margin-right: 0;
  margin-left: 0;
}
.card > .list-group {
  border-top: inherit;
  border-bottom: inherit;
}
.card > .list-group:first-child {
  border-top-width: 0;
  border-top-left-radius: var(--mdb-card-inner-border-radius);
  border-top-right-radius: var(--mdb-card-inner-border-radius);
}
.card > .list-group:last-child {
  border-bottom-width: 0;
  border-bottom-right-radius: var(--mdb-card-inner-border-radius);
  border-bottom-left-radius: var(--mdb-card-inner-border-radius);
}
.card > .card-header + .list-group,
.card > .list-group + .card-footer {
  border-top: 0;
}
.card-body {
  flex: 1 1 auto;
  padding: var(--mdb-card-spacer-y) var(--mdb-card-spacer-x);
  color: var(--mdb-card-color);
}
.card-title {
  margin-bottom: var(--mdb-card-title-spacer-y);
}
.card-subtitle {
  margin-top: calc(var(--mdb-card-title-spacer-y) * -0.5);
}
.card-subtitle,
.card-text:last-child {
  margin-bottom: 0;
}
.card-link + .card-link {
  margin-left: var(--mdb-card-spacer-x);
}
.card-header {
  padding: var(--mdb-card-cap-padding-y) var(--mdb-card-cap-padding-x);
  margin-bottom: 0;
  color: var(--mdb-card-cap-color);
  background-color: var(--mdb-card-cap-bg);
  border-bottom: var(--mdb-card-border-width) solid var(--mdb-card-border-color);
}
.card-header:first-child {
  border-radius: var(--mdb-card-inner-border-radius)
    var(--mdb-card-inner-border-radius) 0 0;
}
.card-footer {
  padding: var(--mdb-card-cap-padding-y) var(--mdb-card-cap-padding-x);
  color: var(--mdb-card-cap-color);
  background-color: var(--mdb-card-cap-bg);
  border-top: var(--mdb-card-border-width) solid var(--mdb-card-border-color);
}
.card-footer:last-child {
  border-radius: 0 0 var(--mdb-card-inner-border-radius)
    var(--mdb-card-inner-border-radius);
}
.card-header-tabs {
  margin-right: calc(var(--mdb-card-cap-padding-x) * -0.5);
  margin-bottom: calc(var(--mdb-card-cap-padding-y) * -1);
  margin-left: calc(var(--mdb-card-cap-padding-x) * -0.5);
  border-bottom: 0;
}
.card-header-tabs .nav-link.active {
  background-color: var(--mdb-card-bg);
  border-bottom-color: var(--mdb-card-bg);
}
.card-header-pills {
  margin-right: calc(var(--mdb-card-cap-padding-x) * -0.5);
  margin-left: calc(var(--mdb-card-cap-padding-x) * -0.5);
}
.card-img-overlay {
  position: absolute;
  top: 0;
  right: 0;
  bottom: 0;
  left: 0;
  padding: var(--mdb-card-img-overlay-padding);
  border-radius: var(--mdb-card-inner-border-radius);
}
.card-img,
.card-img-bottom,
.card-img-top {
  width: 100%;
}
.card-img,
.card-img-top {
  border-top-left-radius: var(--mdb-card-inner-border-radius);
  border-top-right-radius: var(--mdb-card-inner-border-radius);
}
.card-img,
.card-img-bottom {
  border-bottom-right-radius: var(--mdb-card-inner-border-radius);
  border-bottom-left-radius: var(--mdb-card-inner-border-radius);
}
.card-group > .card {
  margin-bottom: var(--mdb-card-group-margin);
}
@media (min-width: 576px) {
  .card-group {
    display: flex;
    flex-flow: row wrap;
  }
  .card-group > .card {
    flex: 1 0 0%;
    margin-bottom: 0;
  }
  .card-group > .card + .card {
    margin-left: 0;
    border-left: 0;
  }
  .card-group > .card:not(:last-child) {
    border-top-right-radius: 0;
    border-bottom-right-radius: 0;
  }
  .card-group > .card:not(:last-child) .card-header,
  .card-group > .card:not(:last-child) .card-img-top {
    border-top-right-radius: 0;
  }
  .card-group > .card:not(:last-child) .card-footer,
  .card-group > .card:not(:last-child) .card-img-bottom {
    border-bottom-right-radius: 0;
  }
  .card-group > .card:not(:first-child) {
    border-top-left-radius: 0;
    border-bottom-left-radius: 0;
  }
  .card-group > .card:not(:first-child) .card-header,
  .card-group > .card:not(:first-child) .card-img-top {
    border-top-left-radius: 0;
  }
  .card-group > .card:not(:first-child) .card-footer,
  .card-group > .card:not(:first-child) .card-img-bottom {
    border-bottom-left-radius: 0;
  }
}
.breadcrumb {
  --mdb-breadcrumb-padding-x: 0;
  --mdb-breadcrumb-padding-y: 0;
  --mdb-breadcrumb-margin-bottom: 1rem;
  --mdb-breadcrumb-divider-color: #757575;
  --mdb-breadcrumb-item-padding-x: 0.5rem;
  --mdb-breadcrumb-item-active-color: #757575;
  display: flex;
  flex-wrap: wrap;
  padding: var(--mdb-breadcrumb-padding-y) var(--mdb-breadcrumb-padding-x);
  margin-bottom: var(--mdb-breadcrumb-margin-bottom);
  font-size: var(--mdb-breadcrumb-font-size);
  list-style: none;
  background-color: var(--mdb-breadcrumb-bg);
  border-radius: var(--mdb-breadcrumb-border-radius);
}
.breadcrumb-item + .breadcrumb-item {
  padding-left: var(--mdb-breadcrumb-item-padding-x);
}
.breadcrumb-item + .breadcrumb-item:before {
  float: left;
  padding-right: var(--mdb-breadcrumb-item-padding-x);
  color: var(--mdb-breadcrumb-divider-color);
  content: var(--mdb-breadcrumb-divider, "/");
}
.breadcrumb-item.active {
  color: var(--mdb-breadcrumb-item-active-color);
}
.pagination {
  --mdb-pagination-padding-x: 0.75rem;
  --mdb-pagination-padding-y: 0.375rem;
  --mdb-pagination-font-size: 0.9rem;
  --mdb-pagination-color: #4f4f4f;
  --mdb-pagination-bg: #fff;
  --mdb-pagination-border-width: 1px;
  --mdb-pagination-border-color: #e0e0e0;
  --mdb-pagination-hover-color: #4f4f4f;
  --mdb-pagination-hover-bg: #eee;
  --mdb-pagination-hover-border-color: #e0e0e0;
  --mdb-pagination-focus-color: var(--mdb-link-hover-color);
  --mdb-pagination-focus-bg: #eee;
  --mdb-pagination-focus-box-shadow: 0 0 0 0.25rem rgba(59, 113, 202, 0.25);
  --mdb-pagination-active-color: #285192;
  --mdb-pagination-active-bg: #e3ebf7;
  --mdb-pagination-active-border-color: #e3ebf7;
  --mdb-pagination-disabled-color: #757575;
  --mdb-pagination-disabled-bg: #fff;
  --mdb-pagination-disabled-border-color: #e0e0e0;
  display: flex;
  padding-left: 0;
  list-style: none;
}
.page-link {
  position: relative;
  display: block;
  padding: var(--mdb-pagination-padding-y) var(--mdb-pagination-padding-x);
  font-size: var(--mdb-pagination-font-size);
  color: var(--mdb-pagination-color);
  background-color: var(--mdb-pagination-bg);
  border: var(--mdb-pagination-border-width) solid
    var(--mdb-pagination-border-color);
  transition: all 0.3s linear;
}
@media (prefers-reduced-motion: reduce) {
  .page-link {
    transition: none;
  }
}
.page-link:hover {
  z-index: 2;
  color: var(--mdb-pagination-hover-color);
  background-color: var(--mdb-pagination-hover-bg);
  border-color: var(--mdb-pagination-hover-border-color);
}
.page-link:focus {
  z-index: 3;
  color: var(--mdb-pagination-focus-color);
  background-color: var(--mdb-pagination-focus-bg);
  outline: 0;
  box-shadow: var(--mdb-pagination-focus-box-shadow);
}
.active > .page-link,
.page-link.active {
  z-index: 3;
  color: var(--mdb-pagination-active-color);
  background-color: var(--mdb-pagination-active-bg);
  border-color: var(--mdb-pagination-active-border-color);
}
.disabled > .page-link,
.page-link.disabled {
  color: var(--mdb-pagination-disabled-color);
  pointer-events: none;
  background-color: var(--mdb-pagination-disabled-bg);
  border-color: var(--mdb-pagination-disabled-border-color);
}
.page-item:not(:first-child) .page-link {
  margin-left: -1px;
}
.pagination-lg {
  --mdb-pagination-padding-x: 1.5rem;
  --mdb-pagination-padding-y: 0.75rem;
  --mdb-pagination-font-size: 1.25rem;
  --mdb-pagination-border-radius: 0.5rem;
}
.pagination-sm {
  --mdb-pagination-padding-x: 0.5rem;
  --mdb-pagination-padding-y: 0.25rem;
  --mdb-pagination-font-size: 0.875rem;
  --mdb-pagination-border-radius: 0.25rem;
}
.badge {
  --mdb-badge-padding-x: 0.65em;
  --mdb-badge-padding-y: 0.35em;
  --mdb-badge-font-size: 0.75em;
  --mdb-badge-font-weight: 700;
  --mdb-badge-color: #fff;
  --mdb-badge-border-radius: 0.27rem;
  display: inline-block;
  padding: var(--mdb-badge-padding-y) var(--mdb-badge-padding-x);
  font-size: var(--mdb-badge-font-size);
  font-weight: var(--mdb-badge-font-weight);
  line-height: 1;
  color: var(--mdb-badge-color);
  text-align: center;
  white-space: nowrap;
  vertical-align: baseline;
  border-radius: var(--mdb-badge-border-radius);
}
.badge:empty {
  display: none;
}
.btn .badge {
  position: relative;
  top: -1px;
}
.alert {
  --mdb-alert-bg: transparent;
  --mdb-alert-padding-x: 1.5rem;
  --mdb-alert-padding-y: 1.25rem;
  --mdb-alert-margin-bottom: 1rem;
  --mdb-alert-color: inherit;
  --mdb-alert-border-color: transparent;
  --mdb-alert-border: 1px solid var(--mdb-alert-border-color);
  --mdb-alert-border-radius: 0.5rem;
  position: relative;
  padding: var(--mdb-alert-padding-y) var(--mdb-alert-padding-x);
  margin-bottom: var(--mdb-alert-margin-bottom);
  color: var(--mdb-alert-color);
  background-color: var(--mdb-alert-bg);
  border: var(--mdb-alert-border);
  border-radius: var(--mdb-alert-border-radius);
}
.alert-heading {
  color: inherit;
}
.alert-link {
  font-weight: 700;
}
.alert-dismissible {
  padding-right: 4.5rem;
}
.alert-dismissible .btn-close {
  position: absolute;
  top: 0;
  right: 0;
  z-index: 2;
  padding: 1.5625rem 1.5rem;
}
.alert-primary {
  --mdb-alert-color: #234479;
  --mdb-alert-bg: #d8e3f4;
  --mdb-alert-border-color: #c4d4ef;
}
.alert-primary .alert-link {
  color: #1c3661;
}
.alert-secondary {
  --mdb-alert-color: #5f646b;
  --mdb-alert-bg: #ecedf0;
  --mdb-alert-border-color: #e2e4e8;
}
.alert-secondary .alert-link {
  color: #4c5056;
}
.alert-success {
  --mdb-alert-color: #0c622e;
  --mdb-alert-bg: #d0eddb;
  --mdb-alert-border-color: #b9e4ca;
}
.alert-success .alert-link {
  color: #0a4e25;
}
.alert-danger {
  --mdb-alert-color: #842e3c;
  --mdb-alert-bg: #f8dbe0;
  --mdb-alert-border-color: #f5c9d1;
}
.alert-danger .alert-link {
  color: #6a2530;
}
.alert-warning {
  --mdb-alert-color: #896110;
  --mdb-alert-bg: #faecd1;
  --mdb-alert-border-color: #f7e3bb;
}
.alert-warning .alert-link {
  color: #6e4e0d;
}
.alert-info {
  --mdb-alert-color: #326c7f;
  --mdb-alert-bg: #ddf0f6;
  --mdb-alert-border-color: #cce9f2;
}
.alert-info .alert-link {
  color: #285666;
}
.alert-light {
  --mdb-alert-color: #646464;
  --mdb-alert-bg: #fefefe;
  --mdb-alert-border-color: #fefefe;
}
.alert-light .alert-link {
  color: #505050;
}
.alert-dark {
  --mdb-alert-color: #1f1b1b;
  --mdb-alert-bg: #d6d5d5;
  --mdb-alert-border-color: #c2c0c0;
}
.alert-dark .alert-link {
  color: #191616;
}
.accordion {
  --mdb-accordion-color: #4f4f4f;
  --mdb-accordion-bg: #fff;
  --mdb-accordion-transition: color 0.15s ease-in-out,
    background-color 0.15s ease-in-out, border-color 0.15s ease-in-out,
    box-shadow 0.15s ease-in-out, border-radius 0.15s ease;
  --mdb-accordion-border-color: var(--mdb-border-color);
  --mdb-accordion-border-width: 1px;
  --mdb-accordion-border-radius: 0.5rem;
  --mdb-accordion-inner-border-radius: calc(0.5rem - 1px);
  --mdb-accordion-btn-padding-x: 1.5rem;
  --mdb-accordion-btn-padding-y: 1.15rem;
  --mdb-accordion-btn-color: #4f4f4f;
  --mdb-accordion-btn-bg: var(--mdb-accordion-bg);
  --mdb-accordion-btn-icon: url("data:image/svg+xml;charset=utf-8,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 16 16' fill='%234f4f4f'%3E%3Cpath fill-rule='evenodd' d='M1.646 4.646a.5.5 0 01.708 0L8 10.293l5.646-5.647a.5.5 0 01.708.708l-6 6a.5.5 0 01-.708 0l-6-6a.5.5 0 010-.708z'/%3E%3C/svg%3E");
  --mdb-accordion-btn-icon-width: 1.25rem;
  --mdb-accordion-btn-icon-transform: rotate(-180deg);
  --mdb-accordion-btn-icon-transition: transform 0.2s ease-in-out;
  --mdb-accordion-btn-active-icon: url("data:image/svg+xml;charset=utf-8,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 16 16' fill='%233b71ca'%3E%3Cpath fill-rule='evenodd' d='M1.646 4.646a.5.5 0 01.708 0L8 10.293l5.646-5.647a.5.5 0 01.708.708l-6 6a.5.5 0 01-.708 0l-6-6a.5.5 0 010-.708z'/%3E%3C/svg%3E");
  --mdb-accordion-btn-focus-border-color: #3b71ca;
  --mdb-accordion-btn-focus-box-shadow: inset 0 -1px 0 rgba(0, 0, 0, 0.125);
  --mdb-accordion-body-padding-x: 1.5rem;
  --mdb-accordion-body-padding-y: 1.15rem;
  --mdb-accordion-active-color: #3b71ca;
  --mdb-accordion-active-bg: #fff;
}
.accordion-button {
  position: relative;
  display: flex;
  align-items: center;
  width: 100%;
  padding: var(--mdb-accordion-btn-padding-y) var(--mdb-accordion-btn-padding-x);
  font-size: 1rem;
  color: var(--mdb-accordion-btn-color);
  text-align: left;
  background-color: var(--mdb-accordion-btn-bg);
  border: 0;
  border-radius: 0;
  overflow-anchor: none;
  transition: var(--mdb-accordion-transition);
}
@media (prefers-reduced-motion: reduce) {
  .accordion-button {
    transition: none;
  }
}
.accordion-button:not(.collapsed) {
  color: var(--mdb-accordion-active-color);
  background-color: var(--mdb-accordion-active-bg);
  box-shadow: inset 0 calc(var(--mdb-accordion-border-width) * -1) 0
    var(--mdb-accordion-border-color);
}
.accordion-button:not(.collapsed):after {
  background-image: var(--mdb-accordion-btn-active-icon);
  transform: var(--mdb-accordion-btn-icon-transform);
}
.accordion-button:after {
  flex-shrink: 0;
  width: var(--mdb-accordion-btn-icon-width);
  height: var(--mdb-accordion-btn-icon-width);
  margin-left: auto;
  content: "";
  background-image: var(--mdb-accordion-btn-icon);
  background-repeat: no-repeat;
  background-size: var(--mdb-accordion-btn-icon-width);
  transition: var(--mdb-accordion-btn-icon-transition);
}
@media (prefers-reduced-motion: reduce) {
  .accordion-button:after {
    transition: none;
  }
}
.accordion-button:hover {
  z-index: 2;
}
.accordion-button:focus {
  z-index: 3;
  box-shadow: var(--mdb-accordion-btn-focus-box-shadow);
}
.accordion-header {
  margin-bottom: 0;
}
.accordion-item {
  color: var(--mdb-accordion-color);
  background-color: var(--mdb-accordion-bg);
  border: var(--mdb-accordion-border-width) solid
    var(--mdb-accordion-border-color);
}
.accordion-item:first-of-type {
  border-top-left-radius: var(--mdb-accordion-border-radius);
  border-top-right-radius: var(--mdb-accordion-border-radius);
}
.accordion-item:first-of-type .accordion-button {
  border-top-left-radius: var(--mdb-accordion-inner-border-radius);
  border-top-right-radius: var(--mdb-accordion-inner-border-radius);
}
.accordion-item:not(:first-of-type) {
  border-top: 0;
}
.accordion-item:last-of-type {
  border-bottom-right-radius: var(--mdb-accordion-border-radius);
  border-bottom-left-radius: var(--mdb-accordion-border-radius);
}
.accordion-item:last-of-type .accordion-button.collapsed {
  border-bottom-right-radius: var(--mdb-accordion-inner-border-radius);
  border-bottom-left-radius: var(--mdb-accordion-inner-border-radius);
}
.accordion-item:last-of-type .accordion-collapse {
  border-bottom-right-radius: var(--mdb-accordion-border-radius);
  border-bottom-left-radius: var(--mdb-accordion-border-radius);
}
.accordion-body {
  padding: var(--mdb-accordion-body-padding-y)
    var(--mdb-accordion-body-padding-x);
}
.accordion-flush .accordion-collapse {
  border-width: 0;
}
.accordion-flush .accordion-item {
  border-right: 0;
  border-left: 0;
  border-radius: 0;
}
.accordion-flush .accordion-item:first-child {
  border-top: 0;
}
.accordion-flush .accordion-item:last-child {
  border-bottom: 0;
}
.accordion-flush .accordion-item .accordion-button,
.accordion-flush .accordion-item .accordion-button.collapsed {
  border-radius: 0;
}
@keyframes progress-bar-stripes {
  0% {
    background-position-x: 4px;
  }
}
.progress {
  --mdb-progress-height: 4px;
  --mdb-progress-font-size: 0.75rem;
  --mdb-progress-bg: #eee;
  --mdb-progress-border-radius: 0.25rem;
  --mdb-progress-box-shadow: inset 0 1px 2px rgba(0, 0, 0, 0.075);
  --mdb-progress-bar-color: #fff;
  --mdb-progress-bar-bg: #3b71ca;
  --mdb-progress-bar-transition: width 0.6s ease;
  height: var(--mdb-progress-height);
  font-size: var(--mdb-progress-font-size);
  background-color: var(--mdb-progress-bg);
  border-radius: var(--mdb-progress-border-radius);
  box-shadow: var(--mdb-progress-box-shadow);
}
.progress,
.progress-bar {
  display: flex;
  overflow: hidden;
}
.progress-bar {
  flex-direction: column;
  justify-content: center;
  color: var(--mdb-progress-bar-color);
  text-align: center;
  white-space: nowrap;
  background-color: var(--mdb-progress-bar-bg);
  transition: var(--mdb-progress-bar-transition);
}
@media (prefers-reduced-motion: reduce) {
  .progress-bar {
    transition: none;
  }
}
.progress-bar-striped {
  background-image: linear-gradient(
    45deg,
    hsla(0, 0%, 100%, 0.15) 25%,
    transparent 0,
    transparent 50%,
    hsla(0, 0%, 100%, 0.15) 0,
    hsla(0, 0%, 100%, 0.15) 75%,
    transparent 0,
    transparent
  );
  background-size: var(--mdb-progress-height) var(--mdb-progress-height);
}
.progress-bar-animated {
  animation: progress-bar-stripes 1s linear infinite;
}
@media (prefers-reduced-motion: reduce) {
  .progress-bar-animated {
    animation: none;
  }
}
.placeholder {
  display: inline-block;
  min-height: 1em;
  vertical-align: middle;
  cursor: wait;
  background-color: currentcolor;
  opacity: 0.5;
}
.placeholder.btn:before {
  display: inline-block;
  content: "";
}
.placeholder-xs {
  min-height: 0.6em;
}
.placeholder-sm {
  min-height: 0.8em;
}
.placeholder-lg {
  min-height: 1.2em;
}
.placeholder-glow .placeholder {
  animation: placeholder-glow 2s ease-in-out infinite;
}
@keyframes placeholder-glow {
  50% {
    opacity: 0.2;
  }
}
.placeholder-wave {
  -webkit-mask-image: linear-gradient(
    130deg,
    #000 55%,
    rgba(0, 0, 0, 0.8) 75%,
    #000 95%
  );
  mask-image: linear-gradient(
    130deg,
    #000 55%,
    rgba(0, 0, 0, 0.8) 75%,
    #000 95%
  );
  -webkit-mask-size: 200% 100%;
  mask-size: 200% 100%;
  animation: placeholder-wave 2s linear infinite;
}
@keyframes placeholder-wave {
  to {
    -webkit-mask-position: -200% 0;
    mask-position: -200% 0;
  }
}
.list-group {
  --mdb-list-group-color: #4f4f4f;
  --mdb-list-group-bg: #fff;
  --mdb-list-group-border-color: rgba(0, 0, 0, 0.125);
  --mdb-list-group-border-width: 1px;
  --mdb-list-group-border-radius: 0.5rem;
  --mdb-list-group-item-padding-x: 1.5rem;
  --mdb-list-group-item-padding-y: 0.5rem;
  --mdb-list-group-action-color: #616161;
  --mdb-list-group-action-hover-color: #616161;
  --mdb-list-group-action-hover-bg: #f5f5f5;
  --mdb-list-group-action-active-color: #4f4f4f;
  --mdb-list-group-action-active-bg: #eee;
  --mdb-list-group-disabled-color: #757575;
  --mdb-list-group-disabled-bg: #fff;
  --mdb-list-group-active-color: #2c58a0;
  --mdb-list-group-active-bg: #dfe7f6;
  --mdb-list-group-active-border-color: #dfe7f6;
  display: flex;
  flex-direction: column;
  padding-left: 0;
  margin-bottom: 0;
  border-radius: var(--mdb-list-group-border-radius);
}
.list-group-numbered {
  list-style-type: none;
  counter-reset: section;
}
.list-group-numbered > .list-group-item:before {
  content: counters(section, ".") ". ";
  counter-increment: section;
}
.list-group-item-action {
  width: 100%;
  color: var(--mdb-list-group-action-color);
  text-align: inherit;
}
.list-group-item-action:focus,
.list-group-item-action:hover {
  z-index: 1;
  color: var(--mdb-list-group-action-hover-color);
  text-decoration: none;
  background-color: var(--mdb-list-group-action-hover-bg);
}
.list-group-item-action:active {
  color: var(--mdb-list-group-action-active-color);
  background-color: var(--mdb-list-group-action-active-bg);
}
.list-group-item {
  position: relative;
  display: block;
  padding: var(--mdb-list-group-item-padding-y)
    var(--mdb-list-group-item-padding-x);
  color: var(--mdb-list-group-color);
  background-color: var(--mdb-list-group-bg);
  border: var(--mdb-list-group-border-width) solid
    var(--mdb-list-group-border-color);
}
.list-group-item:first-child {
  border-top-left-radius: inherit;
  border-top-right-radius: inherit;
}
.list-group-item:last-child {
  border-bottom-right-radius: inherit;
  border-bottom-left-radius: inherit;
}
.list-group-item.disabled,
.list-group-item:disabled {
  color: var(--mdb-list-group-disabled-color);
  pointer-events: none;
  background-color: var(--mdb-list-group-disabled-bg);
}
.list-group-item.active {
  z-index: 2;
  color: var(--mdb-list-group-active-color);
  background-color: var(--mdb-list-group-active-bg);
  border-color: var(--mdb-list-group-active-border-color);
}
.list-group-item + .list-group-item {
  border-top-width: 0;
}
.list-group-item + .list-group-item.active {
  margin-top: calc(var(--mdb-list-group-border-width) * -1);
  border-top-width: var(--mdb-list-group-border-width);
}
.list-group-horizontal {
  flex-direction: row;
}
.list-group-horizontal > .list-group-item:first-child:not(:last-child) {
  border-bottom-left-radius: var(--mdb-list-group-border-radius);
  border-top-right-radius: 0;
}
.list-group-horizontal > .list-group-item:last-child:not(:first-child) {
  border-top-right-radius: var(--mdb-list-group-border-radius);
  border-bottom-left-radius: 0;
}
.list-group-horizontal > .list-group-item.active {
  margin-top: 0;
}
.list-group-horizontal > .list-group-item + .list-group-item {
  border-top-width: var(--mdb-list-group-border-width);
  border-left-width: 0;
}
.list-group-horizontal > .list-group-item + .list-group-item.active {
  margin-left: calc(var(--mdb-list-group-border-width) * -1);
  border-left-width: var(--mdb-list-group-border-width);
}
@media (min-width: 576px) {
  .list-group-horizontal-sm {
    flex-direction: row;
  }
  .list-group-horizontal-sm > .list-group-item:first-child:not(:last-child) {
    border-bottom-left-radius: var(--mdb-list-group-border-radius);
    border-top-right-radius: 0;
  }
  .list-group-horizontal-sm > .list-group-item:last-child:not(:first-child) {
    border-top-right-radius: var(--mdb-list-group-border-radius);
    border-bottom-left-radius: 0;
  }
  .list-group-horizontal-sm > .list-group-item.active {
    margin-top: 0;
  }
  .list-group-horizontal-sm > .list-group-item + .list-group-item {
    border-top-width: var(--mdb-list-group-border-width);
    border-left-width: 0;
  }
  .list-group-horizontal-sm > .list-group-item + .list-group-item.active {
    margin-left: calc(var(--mdb-list-group-border-width) * -1);
    border-left-width: var(--mdb-list-group-border-width);
  }
}
@media (min-width: 768px) {
  .list-group-horizontal-md {
    flex-direction: row;
  }
  .list-group-horizontal-md > .list-group-item:first-child:not(:last-child) {
    border-bottom-left-radius: var(--mdb-list-group-border-radius);
    border-top-right-radius: 0;
  }
  .list-group-horizontal-md > .list-group-item:last-child:not(:first-child) {
    border-top-right-radius: var(--mdb-list-group-border-radius);
    border-bottom-left-radius: 0;
  }
  .list-group-horizontal-md > .list-group-item.active {
    margin-top: 0;
  }
  .list-group-horizontal-md > .list-group-item + .list-group-item {
    border-top-width: var(--mdb-list-group-border-width);
    border-left-width: 0;
  }
  .list-group-horizontal-md > .list-group-item + .list-group-item.active {
    margin-left: calc(var(--mdb-list-group-border-width) * -1);
    border-left-width: var(--mdb-list-group-border-width);
  }
}
@media (min-width: 992px) {
  .list-group-horizontal-lg {
    flex-direction: row;
  }
  .list-group-horizontal-lg > .list-group-item:first-child:not(:last-child) {
    border-bottom-left-radius: var(--mdb-list-group-border-radius);
    border-top-right-radius: 0;
  }
  .list-group-horizontal-lg > .list-group-item:last-child:not(:first-child) {
    border-top-right-radius: var(--mdb-list-group-border-radius);
    border-bottom-left-radius: 0;
  }
  .list-group-horizontal-lg > .list-group-item.active {
    margin-top: 0;
  }
  .list-group-horizontal-lg > .list-group-item + .list-group-item {
    border-top-width: var(--mdb-list-group-border-width);
    border-left-width: 0;
  }
  .list-group-horizontal-lg > .list-group-item + .list-group-item.active {
    margin-left: calc(var(--mdb-list-group-border-width) * -1);
    border-left-width: var(--mdb-list-group-border-width);
  }
}
@media (min-width: 1200px) {
  .list-group-horizontal-xl {
    flex-direction: row;
  }
  .list-group-horizontal-xl > .list-group-item:first-child:not(:last-child) {
    border-bottom-left-radius: var(--mdb-list-group-border-radius);
    border-top-right-radius: 0;
  }
  .list-group-horizontal-xl > .list-group-item:last-child:not(:first-child) {
    border-top-right-radius: var(--mdb-list-group-border-radius);
    border-bottom-left-radius: 0;
  }
  .list-group-horizontal-xl > .list-group-item.active {
    margin-top: 0;
  }
  .list-group-horizontal-xl > .list-group-item + .list-group-item {
    border-top-width: var(--mdb-list-group-border-width);
    border-left-width: 0;
  }
  .list-group-horizontal-xl > .list-group-item + .list-group-item.active {
    margin-left: calc(var(--mdb-list-group-border-width) * -1);
    border-left-width: var(--mdb-list-group-border-width);
  }
}
@media (min-width: 1400px) {
  .list-group-horizontal-xxl {
    flex-direction: row;
  }
  .list-group-horizontal-xxl > .list-group-item:first-child:not(:last-child) {
    border-bottom-left-radius: var(--mdb-list-group-border-radius);
    border-top-right-radius: 0;
  }
  .list-group-horizontal-xxl > .list-group-item:last-child:not(:first-child) {
    border-top-right-radius: var(--mdb-list-group-border-radius);
    border-bottom-left-radius: 0;
  }
  .list-group-horizontal-xxl > .list-group-item.active {
    margin-top: 0;
  }
  .list-group-horizontal-xxl > .list-group-item + .list-group-item {
    border-top-width: var(--mdb-list-group-border-width);
    border-left-width: 0;
  }
  .list-group-horizontal-xxl > .list-group-item + .list-group-item.active {
    margin-left: calc(var(--mdb-list-group-border-width) * -1);
    border-left-width: var(--mdb-list-group-border-width);
  }
}
.list-group-flush {
  border-radius: 0;
}
.list-group-flush > .list-group-item {
  border-left-width: 0;
  border-bottom-width: var(--mdb-list-group-border-width);
  border-right-width: 0;
  border-top-width: 0;
}
.list-group-flush > .list-group-item:last-child {
  border-bottom-width: 0;
}
.list-group-item-primary {
  color: #234479;
  background-color: #d8e3f4;
}
.list-group-item-primary.list-group-item-action:focus,
.list-group-item-primary.list-group-item-action:hover {
  color: #234479;
  background-color: #c2ccdc;
}
.list-group-item-primary.list-group-item-action.active {
  color: #fff;
  background-color: #234479;
  border-color: #234479;
}
.list-group-item-secondary {
  color: #5f646b;
  background-color: #ecedf0;
}
.list-group-item-secondary.list-group-item-action:focus,
.list-group-item-secondary.list-group-item-action:hover {
  color: #5f646b;
  background-color: #d4d5d8;
}
.list-group-item-secondary.list-group-item-action.active {
  color: #fff;
  background-color: #5f646b;
  border-color: #5f646b;
}
.list-group-item-success {
  color: #0c622e;
  background-color: #d0eddb;
}
.list-group-item-success.list-group-item-action:focus,
.list-group-item-success.list-group-item-action:hover {
  color: #0c622e;
  background-color: #bbd5c5;
}
.list-group-item-success.list-group-item-action.active {
  color: #fff;
  background-color: #0c622e;
  border-color: #0c622e;
}
.list-group-item-danger {
  color: #842e3c;
  background-color: #f8dbe0;
}
.list-group-item-danger.list-group-item-action:focus,
.list-group-item-danger.list-group-item-action:hover {
  color: #842e3c;
  background-color: #dfc5ca;
}
.list-group-item-danger.list-group-item-action.active {
  color: #fff;
  background-color: #842e3c;
  border-color: #842e3c;
}
.list-group-item-warning {
  color: #896110;
  background-color: #faecd1;
}
.list-group-item-warning.list-group-item-action:focus,
.list-group-item-warning.list-group-item-action:hover {
  color: #896110;
  background-color: #e1d4bc;
}
.list-group-item-warning.list-group-item-action.active {
  color: #fff;
  background-color: #896110;
  border-color: #896110;
}
.list-group-item-info {
  color: #326c7f;
  background-color: #ddf0f6;
}
.list-group-item-info.list-group-item-action:focus,
.list-group-item-info.list-group-item-action:hover {
  color: #326c7f;
  background-color: #c7d8dd;
}
.list-group-item-info.list-group-item-action.active {
  color: #fff;
  background-color: #326c7f;
  border-color: #326c7f;
}
.list-group-item-light {
  color: #646464;
  background-color: #fefefe;
}
.list-group-item-light.list-group-item-action:focus,
.list-group-item-light.list-group-item-action:hover {
  color: #646464;
  background-color: #e5e5e5;
}
.list-group-item-light.list-group-item-action.active {
  color: #fff;
  background-color: #646464;
  border-color: #646464;
}
.list-group-item-dark {
  color: #1f1b1b;
  background-color: #d6d5d5;
}
.list-group-item-dark.list-group-item-action:focus,
.list-group-item-dark.list-group-item-action:hover {
  color: #1f1b1b;
  background-color: #c1c0c0;
}
.list-group-item-dark.list-group-item-action.active {
  color: #fff;
  background-color: #1f1b1b;
  border-color: #1f1b1b;
}
.btn-close {
  box-sizing: content-box;
  width: 1em;
  height: 1em;
  padding: 0.25em;
  color: #000;
  background: transparent
    url("data:image/svg+xml;charset=utf-8,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 16 16'%3E%3Cpath d='M.293.293a1 1 0 011.414 0L8 6.586 14.293.293a1 1 0 111.414 1.414L9.414 8l6.293 6.293a1 1 0 01-1.414 1.414L8 9.414l-6.293 6.293a1 1 0 01-1.414-1.414L6.586 8 .293 1.707a1 1 0 010-1.414z'/%3E%3C/svg%3E")
    50%/1em auto no-repeat;
  border: 0;
  border-radius: 0.25rem;
  opacity: 0.5;
}
.btn-close:hover {
  color: #000;
  text-decoration: none;
  opacity: 0.75;
}
.btn-close:focus {
  outline: 0;
  box-shadow: 0 0 0 0.25rem rgba(59, 113, 202, 0.25);
  opacity: 1;
}
.btn-close.disabled,
.btn-close:disabled {
  pointer-events: none;
  -webkit-user-select: none;
  -moz-user-select: none;
  user-select: none;
  opacity: 0.25;
}
.btn-close-white {
  filter: invert(1) grayscale(100%) brightness(200%);
}
.toast {
  --mdb-toast-zindex: 1060;
  --mdb-toast-padding-x: 1rem;
  --mdb-toast-padding-y: 0.65rem;
  --mdb-toast-spacing: 1.5rem;
  --mdb-toast-max-width: 350px;
  --mdb-toast-font-size: 0.875rem;
  --mdb-toast-bg: #fff;
  --mdb-toast-border-width: 1px;
  --mdb-toast-border-color: var(--mdb-border-color-translucent);
  --mdb-toast-border-radius: 0.5rem;
  --mdb-toast-box-shadow: 0 2px 15px -3px rgba(0, 0, 0, 0.07),
    0 10px 20px -2px rgba(0, 0, 0, 0.04);
  --mdb-toast-header-color: #757575;
  --mdb-toast-header-bg: #fff;
  --mdb-toast-header-border-color: rgba(0, 0, 0, 0.05);
  width: var(--mdb-toast-max-width);
  max-width: 100%;
  font-size: var(--mdb-toast-font-size);
  color: var(--mdb-toast-color);
  pointer-events: auto;
  background-color: var(--mdb-toast-bg);
  background-clip: padding-box;
  border: var(--mdb-toast-border-width) solid var(--mdb-toast-border-color);
  box-shadow: var(--mdb-toast-box-shadow);
  border-radius: var(--mdb-toast-border-radius);
}
.toast.showing {
  opacity: 0;
}
.toast:not(.show) {
  display: none;
}
.toast-container {
  --mdb-toast-zindex: 1060;
  position: absolute;
  z-index: var(--mdb-toast-zindex);
  width: -webkit-max-content;
  width: -moz-max-content;
  width: max-content;
  max-width: 100%;
  pointer-events: none;
}
.toast-container > :not(:last-child) {
  margin-bottom: var(--mdb-toast-spacing);
}
.toast-header {
  display: flex;
  align-items: center;
  padding: var(--mdb-toast-padding-y) var(--mdb-toast-padding-x);
  color: var(--mdb-toast-header-color);
  background-color: var(--mdb-toast-header-bg);
  background-clip: padding-box;
  border-bottom: var(--mdb-toast-border-width) solid
    var(--mdb-toast-header-border-color);
  border-top-left-radius: calc(
    var(--mdb-toast-border-radius) - var(--mdb-toast-border-width)
  );
  border-top-right-radius: calc(
    var(--mdb-toast-border-radius) - var(--mdb-toast-border-width)
  );
}
.toast-header .btn-close {
  margin-right: calc(var(--mdb-toast-padding-x) * -0.5);
  margin-left: var(--mdb-toast-padding-x);
}
.toast-body {
  padding: var(--mdb-toast-padding-x);
  word-wrap: break-word;
}
.modal {
  --mdb-modal-zindex: 1055;
  --mdb-modal-width: 500px;
  --mdb-modal-padding: 1rem;
  --mdb-modal-margin: 0.5rem;
  --mdb-modal-bg: #fff;
  --mdb-modal-border-color: var(--mdb-border-color-translucent);
  --mdb-modal-border-width: 1px;
  --mdb-modal-border-radius: 0.5rem;
  --mdb-modal-box-shadow: 0 0.125rem 0.25rem rgba(0, 0, 0, 0.075);
  --mdb-modal-inner-border-radius: calc(0.5rem - 1px);
  --mdb-modal-header-padding-x: 1rem;
  --mdb-modal-header-padding-y: 1rem;
  --mdb-modal-header-padding: 1rem 1rem;
  --mdb-modal-header-border-color: #f5f5f5;
  --mdb-modal-header-border-width: 2px;
  --mdb-modal-title-line-height: 1.6;
  --mdb-modal-footer-gap: 0.5rem;
  --mdb-modal-footer-border-color: #f5f5f5;
  --mdb-modal-footer-border-width: 2px;
  position: fixed;
  top: 0;
  left: 0;
  z-index: var(--mdb-modal-zindex);
  display: none;
  width: 100%;
  height: 100%;
  overflow-x: hidden;
  overflow-y: auto;
  outline: 0;
}
.modal-dialog {
  position: relative;
  width: auto;
  margin: var(--mdb-modal-margin);
  pointer-events: none;
}
.modal.fade .modal-dialog {
  transition: transform 0.3s ease-out;
  transform: translateY(-50px);
}
@media (prefers-reduced-motion: reduce) {
  .modal.fade .modal-dialog {
    transition: none;
  }
}
.modal.show .modal-dialog {
  transform: none;
}
.modal.modal-static .modal-dialog {
  transform: scale(1.02);
}
.modal-dialog-scrollable {
  height: calc(100% - var(--mdb-modal-margin) * 2);
}
.modal-dialog-scrollable .modal-content {
  max-height: 100%;
  overflow: hidden;
}
.modal-dialog-scrollable .modal-body {
  overflow-y: auto;
}
.modal-dialog-centered {
  display: flex;
  align-items: center;
  min-height: calc(100% - var(--mdb-modal-margin) * 2);
}
.modal-content {
  position: relative;
  display: flex;
  flex-direction: column;
  width: 100%;
  color: var(--mdb-modal-color);
  pointer-events: auto;
  background-color: var(--mdb-modal-bg);
  background-clip: padding-box;
  border: var(--mdb-modal-border-width) solid var(--mdb-modal-border-color);
  border-radius: var(--mdb-modal-border-radius);
  outline: 0;
}
.modal-backdrop {
  --mdb-backdrop-zindex: 1050;
  --mdb-backdrop-bg: #000;
  --mdb-backdrop-opacity: 0.5;
  position: fixed;
  top: 0;
  left: 0;
  z-index: var(--mdb-backdrop-zindex);
  width: 100vw;
  height: 100vh;
  background-color: var(--mdb-backdrop-bg);
}
.modal-backdrop.fade {
  opacity: 0;
}
.modal-backdrop.show {
  opacity: var(--mdb-backdrop-opacity);
}
.modal-header {
  display: flex;
  flex-shrink: 0;
  align-items: center;
  justify-content: space-between;
  padding: var(--mdb-modal-header-padding);
  border-bottom: var(--mdb-modal-header-border-width) solid
    var(--mdb-modal-header-border-color);
  border-top-left-radius: var(--mdb-modal-inner-border-radius);
  border-top-right-radius: var(--mdb-modal-inner-border-radius);
}
.modal-header .btn-close {
  padding: calc(var(--mdb-modal-header-padding-y) * 0.5)
    calc(var(--mdb-modal-header-padding-x) * 0.5);
  margin: calc(var(--mdb-modal-header-padding-y) * -0.5)
    calc(var(--mdb-modal-header-padding-x) * -0.5)
    calc(var(--mdb-modal-header-padding-y) * -0.5) auto;
}
.modal-title {
  margin-bottom: 0;
  line-height: var(--mdb-modal-title-line-height);
}
.modal-body {
  position: relative;
  flex: 1 1 auto;
  padding: var(--mdb-modal-padding);
}
.modal-footer {
  display: flex;
  flex-shrink: 0;
  flex-wrap: wrap;
  align-items: center;
  justify-content: flex-end;
  padding: calc(var(--mdb-modal-padding) - var(--mdb-modal-footer-gap) * 0.5);
  background-color: var(--mdb-modal-footer-bg);
  border-top: var(--mdb-modal-footer-border-width) solid
    var(--mdb-modal-footer-border-color);
  border-bottom-right-radius: var(--mdb-modal-inner-border-radius);
  border-bottom-left-radius: var(--mdb-modal-inner-border-radius);
}
.modal-footer > * {
  margin: calc(var(--mdb-modal-footer-gap) * 0.5);
}
@media (min-width: 576px) {
  .modal {
    --mdb-modal-margin: 1.75rem;
    --mdb-modal-box-shadow: 0 0.5rem 1rem rgba(0, 0, 0, 0.15);
  }
  .modal-dialog {
    max-width: var(--mdb-modal-width);
    margin-right: auto;
    margin-left: auto;
  }
  .modal-sm {
    --mdb-modal-width: 300px;
  }
}
@media (min-width: 992px) {
  .modal-lg,
  .modal-xl {
    --mdb-modal-width: 800px;
  }
}
@media (min-width: 1200px) {
  .modal-xl {
    --mdb-modal-width: 1140px;
  }
}
.modal-fullscreen {
  width: 100vw;
  max-width: none;
  height: 100%;
  margin: 0;
}
.modal-fullscreen .modal-content {
  height: 100%;
  border: 0;
  border-radius: 0;
}
.modal-fullscreen .modal-footer,
.modal-fullscreen .modal-header {
  border-radius: 0;
}
.modal-fullscreen .modal-body {
  overflow-y: auto;
}
@media (max-width: 575.98px) {
  .modal-fullscreen-sm-down {
    width: 100vw;
    max-width: none;
    height: 100%;
    margin: 0;
  }
  .modal-fullscreen-sm-down .modal-content {
    height: 100%;
    border: 0;
    border-radius: 0;
  }
  .modal-fullscreen-sm-down .modal-footer,
  .modal-fullscreen-sm-down .modal-header {
    border-radius: 0;
  }
  .modal-fullscreen-sm-down .modal-body {
    overflow-y: auto;
  }
}
@media (max-width: 767.98px) {
  .modal-fullscreen-md-down {
    width: 100vw;
    max-width: none;
    height: 100%;
    margin: 0;
  }
  .modal-fullscreen-md-down .modal-content {
    height: 100%;
    border: 0;
    border-radius: 0;
  }
  .modal-fullscreen-md-down .modal-footer,
  .modal-fullscreen-md-down .modal-header {
    border-radius: 0;
  }
  .modal-fullscreen-md-down .modal-body {
    overflow-y: auto;
  }
}
@media (max-width: 991.98px) {
  .modal-fullscreen-lg-down {
    width: 100vw;
    max-width: none;
    height: 100%;
    margin: 0;
  }
  .modal-fullscreen-lg-down .modal-content {
    height: 100%;
    border: 0;
    border-radius: 0;
  }
  .modal-fullscreen-lg-down .modal-footer,
  .modal-fullscreen-lg-down .modal-header {
    border-radius: 0;
  }
  .modal-fullscreen-lg-down .modal-body {
    overflow-y: auto;
  }
}
@media (max-width: 1199.98px) {
  .modal-fullscreen-xl-down {
    width: 100vw;
    max-width: none;
    height: 100%;
    margin: 0;
  }
  .modal-fullscreen-xl-down .modal-content {
    height: 100%;
    border: 0;
    border-radius: 0;
  }
  .modal-fullscreen-xl-down .modal-footer,
  .modal-fullscreen-xl-down .modal-header {
    border-radius: 0;
  }
  .modal-fullscreen-xl-down .modal-body {
    overflow-y: auto;
  }
}
@media (max-width: 1399.98px) {
  .modal-fullscreen-xxl-down {
    width: 100vw;
    max-width: none;
    height: 100%;
    margin: 0;
  }
  .modal-fullscreen-xxl-down .modal-content {
    height: 100%;
    border: 0;
    border-radius: 0;
  }
  .modal-fullscreen-xxl-down .modal-footer,
  .modal-fullscreen-xxl-down .modal-header {
    border-radius: 0;
  }
  .modal-fullscreen-xxl-down .modal-body {
    overflow-y: auto;
  }
}
.popover {
  --mdb-popover-zindex: 1080;
  --mdb-popover-max-width: 276px;
  --mdb-popover-font-size: 0.875rem;
  --mdb-popover-bg: #fff;
  --mdb-popover-border-width: 1px;
  --mdb-popover-border-color: #f5f5f5;
  --mdb-popover-border-radius: 0.5rem;
  --mdb-popover-inner-border-radius: calc(0.5rem - 1px);
  --mdb-popover-box-shadow: 0 0px 3px 0 rgba(0, 0, 0, 0.07),
    0 2px 2px 0 rgba(0, 0, 0, 0.04);
  --mdb-popover-header-padding-x: 1rem;
  --mdb-popover-header-padding-y: 0.5rem;
  --mdb-popover-header-font-size: 1rem;
  --mdb-popover-header-bg: #fff;
  --mdb-popover-body-padding-x: 1rem;
  --mdb-popover-body-padding-y: 1rem;
  --mdb-popover-body-color: #4f4f4f;
  --mdb-popover-arrow-width: 1rem;
  --mdb-popover-arrow-height: 0.5rem;
  --mdb-popover-arrow-border: var(--mdb-popover-border-color);
  z-index: var(--mdb-popover-zindex);
  display: block;
  max-width: var(--mdb-popover-max-width);
  font-family: var(--mdb-font-roboto);
  font-style: normal;
  font-weight: 400;
  line-height: 1.6;
  text-align: left;
  text-align: start;
  text-decoration: none;
  text-shadow: none;
  text-transform: none;
  letter-spacing: normal;
  word-break: normal;
  white-space: normal;
  word-spacing: normal;
  line-break: auto;
  font-size: var(--mdb-popover-font-size);
  word-wrap: break-word;
  background-color: var(--mdb-popover-bg);
  background-clip: padding-box;
  border: var(--mdb-popover-border-width) solid var(--mdb-popover-border-color);
  border-radius: var(--mdb-popover-border-radius);
  box-shadow: var(--mdb-popover-box-shadow);
}
.popover .popover-arrow {
  display: block;
  width: var(--mdb-popover-arrow-width);
  height: var(--mdb-popover-arrow-height);
}
.popover .popover-arrow:after,
.popover .popover-arrow:before {
  position: absolute;
  display: block;
  content: "";
  border: 0 solid transparent;
}
.bs-popover-auto[data-popper-placement^="top"] > .popover-arrow,
.bs-popover-top > .popover-arrow {
  bottom: calc(
    var(--mdb-popover-arrow-height) * -1 - var(--mdb-popover-border-width)
  );
}
.bs-popover-auto[data-popper-placement^="top"] > .popover-arrow:after,
.bs-popover-auto[data-popper-placement^="top"] > .popover-arrow:before,
.bs-popover-top > .popover-arrow:after,
.bs-popover-top > .popover-arrow:before {
  border-left-width: calc(var(--mdb-popover-arrow-width) * 0.5);
  border-bottom-width: 0;
  border-right-width: calc(var(--mdb-popover-arrow-width) * 0.5);
  border-top-width: var(--mdb-popover-arrow-height);
}
.bs-popover-auto[data-popper-placement^="top"] > .popover-arrow:before,
.bs-popover-top > .popover-arrow:before {
  bottom: 0;
  border-top-color: var(--mdb-popover-arrow-border);
}
.bs-popover-auto[data-popper-placement^="top"] > .popover-arrow:after,
.bs-popover-top > .popover-arrow:after {
  bottom: var(--mdb-popover-border-width);
  border-top-color: var(--mdb-popover-bg);
} /*!rtl:begin:ignore*/
.bs-popover-auto[data-popper-placement^="right"] > .popover-arrow,
.bs-popover-end > .popover-arrow {
  left: calc(
    var(--mdb-popover-arrow-height) * -1 - var(--mdb-popover-border-width)
  );
  width: var(--mdb-popover-arrow-height);
  height: var(--mdb-popover-arrow-width);
}
.bs-popover-auto[data-popper-placement^="right"] > .popover-arrow:after,
.bs-popover-auto[data-popper-placement^="right"] > .popover-arrow:before,
.bs-popover-end > .popover-arrow:after,
.bs-popover-end > .popover-arrow:before {
  border-left-width: 0;
  border-bottom-width: calc(var(--mdb-popover-arrow-width) * 0.5);
  border-right-width: var(--mdb-popover-arrow-height);
  border-top-width: calc(var(--mdb-popover-arrow-width) * 0.5);
}
.bs-popover-auto[data-popper-placement^="right"] > .popover-arrow:before,
.bs-popover-end > .popover-arrow:before {
  left: 0;
  border-right-color: var(--mdb-popover-arrow-border);
}
.bs-popover-auto[data-popper-placement^="right"] > .popover-arrow:after,
.bs-popover-end > .popover-arrow:after {
  left: var(--mdb-popover-border-width);
  border-right-color: var(--mdb-popover-bg);
} /*!rtl:end:ignore*/
.bs-popover-auto[data-popper-placement^="bottom"] > .popover-arrow,
.bs-popover-bottom > .popover-arrow {
  top: calc(
    var(--mdb-popover-arrow-height) * -1 - var(--mdb-popover-border-width)
  );
}
.bs-popover-auto[data-popper-placement^="bottom"] > .popover-arrow:after,
.bs-popover-auto[data-popper-placement^="bottom"] > .popover-arrow:before,
.bs-popover-bottom > .popover-arrow:after,
.bs-popover-bottom > .popover-arrow:before {
  border-left-width: calc(var(--mdb-popover-arrow-width) * 0.5);
  border-bottom-width: var(--mdb-popover-arrow-height);
  border-right-width: calc(var(--mdb-popover-arrow-width) * 0.5);
  border-top-width: 0;
}
.bs-popover-auto[data-popper-placement^="bottom"] > .popover-arrow:before,
.bs-popover-bottom > .popover-arrow:before {
  top: 0;
  border-bottom-color: var(--mdb-popover-arrow-border);
}
.bs-popover-auto[data-popper-placement^="bottom"] > .popover-arrow:after,
.bs-popover-bottom > .popover-arrow:after {
  top: var(--mdb-popover-border-width);
  border-bottom-color: var(--mdb-popover-bg);
}
.bs-popover-auto[data-popper-placement^="bottom"] .popover-header:before,
.bs-popover-bottom .popover-header:before {
  position: absolute;
  top: 0;
  left: 50%;
  display: block;
  width: var(--mdb-popover-arrow-width);
  margin-left: calc(var(--mdb-popover-arrow-width) * -0.5);
  content: "";
  border-bottom: var(--mdb-popover-border-width) solid
    var(--mdb-popover-header-bg);
} /*!rtl:begin:ignore*/
.bs-popover-auto[data-popper-placement^="left"] > .popover-arrow,
.bs-popover-start > .popover-arrow {
  right: calc(
    var(--mdb-popover-arrow-height) * -1 - var(--mdb-popover-border-width)
  );
  width: var(--mdb-popover-arrow-height);
  height: var(--mdb-popover-arrow-width);
}
.bs-popover-auto[data-popper-placement^="left"] > .popover-arrow:after,
.bs-popover-auto[data-popper-placement^="left"] > .popover-arrow:before,
.bs-popover-start > .popover-arrow:after,
.bs-popover-start > .popover-arrow:before {
  border-left-width: var(--mdb-popover-arrow-height);
  border-bottom-width: calc(var(--mdb-popover-arrow-width) * 0.5);
  border-right-width: 0;
  border-top-width: calc(var(--mdb-popover-arrow-width) * 0.5);
}
.bs-popover-auto[data-popper-placement^="left"] > .popover-arrow:before,
.bs-popover-start > .popover-arrow:before {
  right: 0;
  border-left-color: var(--mdb-popover-arrow-border);
}
.bs-popover-auto[data-popper-placement^="left"] > .popover-arrow:after,
.bs-popover-start > .popover-arrow:after {
  right: var(--mdb-popover-border-width);
  border-left-color: var(--mdb-popover-bg);
} /*!rtl:end:ignore*/
.popover-header {
  padding: var(--mdb-popover-header-padding-y)
    var(--mdb-popover-header-padding-x);
  margin-bottom: 0;
  font-size: var(--mdb-popover-header-font-size);
  color: var(--mdb-popover-header-color);
  background-color: var(--mdb-popover-header-bg);
  border-bottom: var(--mdb-popover-border-width) solid
    var(--mdb-popover-border-color);
  border-top-left-radius: var(--mdb-popover-inner-border-radius);
  border-top-right-radius: var(--mdb-popover-inner-border-radius);
}
.popover-header:empty {
  display: none;
}
.popover-body {
  padding: var(--mdb-popover-body-padding-y) var(--mdb-popover-body-padding-x);
  color: var(--mdb-popover-body-color);
}
.spinner-border,
.spinner-grow {
  display: inline-block;
  width: var(--mdb-spinner-width);
  height: var(--mdb-spinner-height);
  vertical-align: var(--mdb-spinner-vertical-align);
  border-radius: 50%;
  animation: var(--mdb-spinner-animation-speed) linear infinite
    var(--mdb-spinner-animation-name);
}
@keyframes spinner-border {
  to {
    transform: rotate(1turn);
  }
}
.spinner-border {
  --mdb-spinner-width: 2rem;
  --mdb-spinner-height: 2rem;
  --mdb-spinner-vertical-align: -0.125em;
  --mdb-spinner-border-width: 0.25em;
  --mdb-spinner-animation-speed: 0.75s;
  --mdb-spinner-animation-name: spinner-border;
  border: var(--mdb-spinner-border-width) solid;
  border-right-color: transparent;
}
.spinner-border-sm {
  --mdb-spinner-width: 1rem;
  --mdb-spinner-height: 1rem;
  --mdb-spinner-border-width: 0.2em;
}
@keyframes spinner-grow {
  0% {
    transform: scale(0);
  }
  50% {
    opacity: 1;
    transform: none;
  }
}
.spinner-grow {
  --mdb-spinner-width: 2rem;
  --mdb-spinner-height: 2rem;
  --mdb-spinner-vertical-align: -0.125em;
  --mdb-spinner-animation-speed: 0.75s;
  --mdb-spinner-animation-name: spinner-grow;
  background-color: currentcolor;
  opacity: 0;
}
.spinner-grow-sm {
  --mdb-spinner-width: 1rem;
  --mdb-spinner-height: 1rem;
}
@media (prefers-reduced-motion: reduce) {
  .spinner-border,
  .spinner-grow {
    --mdb-spinner-animation-speed: 1.5s;
  }
}
.tooltip {
  --mdb-tooltip-zindex: 1090;
  --mdb-tooltip-max-width: 200px;
  --mdb-tooltip-padding-x: 16px;
  --mdb-tooltip-padding-y: 6px;
  --mdb-tooltip-font-size: 0.875rem;
  --mdb-tooltip-color: #fff;
  --mdb-tooltip-bg: #6d6d6d;
  --mdb-tooltip-border-radius: 0.25rem;
  --mdb-tooltip-opacity: 0.9;
  --mdb-tooltip-arrow-width: 0.8rem;
  --mdb-tooltip-arrow-height: 0.4rem;
  z-index: var(--mdb-tooltip-zindex);
  display: block;
  padding: var(--mdb-tooltip-arrow-height);
  margin: var(--mdb-tooltip-margin);
  font-family: var(--mdb-font-roboto);
  font-style: normal;
  font-weight: 400;
  line-height: 1.6;
  text-align: left;
  text-align: start;
  text-decoration: none;
  text-shadow: none;
  text-transform: none;
  letter-spacing: normal;
  word-break: normal;
  white-space: normal;
  word-spacing: normal;
  line-break: auto;
  font-size: var(--mdb-tooltip-font-size);
  word-wrap: break-word;
  opacity: 0;
}
.tooltip.show {
  opacity: var(--mdb-tooltip-opacity);
}
.tooltip .tooltip-arrow {
  display: block;
  width: var(--mdb-tooltip-arrow-width);
  height: var(--mdb-tooltip-arrow-height);
}
.tooltip .tooltip-arrow:before {
  position: absolute;
  content: "";
  border-color: transparent;
  border-style: solid;
}
.bs-tooltip-auto[data-popper-placement^="top"] .tooltip-arrow,
.bs-tooltip-top .tooltip-arrow {
  bottom: 0;
}
.bs-tooltip-auto[data-popper-placement^="top"] .tooltip-arrow:before,
.bs-tooltip-top .tooltip-arrow:before {
  top: -1px;
  border-left-width: calc(var(--mdb-tooltip-arrow-width) * 0.5);
  border-bottom-width: 0;
  border-right-width: calc(var(--mdb-tooltip-arrow-width) * 0.5);
  border-top-width: var(--mdb-tooltip-arrow-height);
  border-top-color: var(--mdb-tooltip-bg);
} /*!rtl:begin:ignore*/
.bs-tooltip-auto[data-popper-placement^="right"] .tooltip-arrow,
.bs-tooltip-end .tooltip-arrow {
  left: 0;
  width: var(--mdb-tooltip-arrow-height);
  height: var(--mdb-tooltip-arrow-width);
}
.bs-tooltip-auto[data-popper-placement^="right"] .tooltip-arrow:before,
.bs-tooltip-end .tooltip-arrow:before {
  right: -1px;
  border-left-width: 0;
  border-bottom-width: calc(var(--mdb-tooltip-arrow-width) * 0.5);
  border-right-width: var(--mdb-tooltip-arrow-height);
  border-top-width: calc(var(--mdb-tooltip-arrow-width) * 0.5);
  border-right-color: var(--mdb-tooltip-bg);
} /*!rtl:end:ignore*/
.bs-tooltip-auto[data-popper-placement^="bottom"] .tooltip-arrow,
.bs-tooltip-bottom .tooltip-arrow {
  top: 0;
}
.bs-tooltip-auto[data-popper-placement^="bottom"] .tooltip-arrow:before,
.bs-tooltip-bottom .tooltip-arrow:before {
  bottom: -1px;
  border-left-width: calc(var(--mdb-tooltip-arrow-width) * 0.5);
  border-bottom-width: var(--mdb-tooltip-arrow-height);
  border-right-width: calc(var(--mdb-tooltip-arrow-width) * 0.5);
  border-top-width: 0;
  border-bottom-color: var(--mdb-tooltip-bg);
} /*!rtl:begin:ignore*/
.bs-tooltip-auto[data-popper-placement^="left"] .tooltip-arrow,
.bs-tooltip-start .tooltip-arrow {
  right: 0;
  width: var(--mdb-tooltip-arrow-height);
  height: var(--mdb-tooltip-arrow-width);
}
.bs-tooltip-auto[data-popper-placement^="left"] .tooltip-arrow:before,
.bs-tooltip-start .tooltip-arrow:before {
  left: -1px;
  border-left-width: var(--mdb-tooltip-arrow-height);
  border-bottom-width: calc(var(--mdb-tooltip-arrow-width) * 0.5);
  border-right-width: 0;
  border-top-width: calc(var(--mdb-tooltip-arrow-width) * 0.5);
  border-left-color: var(--mdb-tooltip-bg);
} /*!rtl:end:ignore*/
.tooltip-inner {
  max-width: var(--mdb-tooltip-max-width);
  padding: var(--mdb-tooltip-padding-y) var(--mdb-tooltip-padding-x);
  color: var(--mdb-tooltip-color);
  text-align: center;
  background-color: var(--mdb-tooltip-bg);
  border-radius: var(--mdb-tooltip-border-radius);
}
.clearfix:after {
  display: block;
  clear: both;
  content: "";
}
.text-bg-primary {
  color: #fff !important;
  background-color: RGBA(59, 113, 202, var(--mdb-bg-opacity, 1)) !important;
}
.text-bg-secondary {
  color: #000 !important;
  background-color: RGBA(159, 166, 178, var(--mdb-bg-opacity, 1)) !important;
}
.text-bg-success {
  color: #000 !important;
  background-color: RGBA(20, 164, 77, var(--mdb-bg-opacity, 1)) !important;
}
.text-bg-danger {
  color: #000 !important;
  background-color: RGBA(220, 76, 100, var(--mdb-bg-opacity, 1)) !important;
}
.text-bg-warning {
  color: #000 !important;
  background-color: RGBA(228, 161, 27, var(--mdb-bg-opacity, 1)) !important;
}
.text-bg-info {
  color: #000 !important;
  background-color: RGBA(84, 180, 211, var(--mdb-bg-opacity, 1)) !important;
}
.text-bg-light {
  color: #000 !important;
  background-color: RGBA(251, 251, 251, var(--mdb-bg-opacity, 1)) !important;
}
.text-bg-dark {
  color: #fff !important;
  background-color: RGBA(51, 45, 45, var(--mdb-bg-opacity, 1)) !important;
}
.link-primary {
  color: #3b71ca !important;
}
.link-primary:focus,
.link-primary:hover {
  color: #386bc0 !important;
}
.link-secondary {
  color: #9fa6b2 !important;
}
.link-secondary:focus,
.link-secondary:hover {
  color: #a4aab6 !important;
}
.link-success {
  color: #14a44d !important;
}
.link-success:focus,
.link-success:hover {
  color: #20a956 !important;
}
.link-danger {
  color: #dc4c64 !important;
}
.link-danger:focus,
.link-danger:hover {
  color: #de556c !important;
}
.link-warning {
  color: #e4a11b !important;
}
.link-warning:focus,
.link-warning:hover {
  color: #e5a626 !important;
}
.link-info {
  color: #54b4d3 !important;
}
.link-info:focus,
.link-info:hover {
  color: #5db8d5 !important;
}
.link-light,
.link-light:focus,
.link-light:hover {
  color: #fbfbfb !important;
}
.link-dark {
  color: #332d2d !important;
}
.link-dark:focus,
.link-dark:hover {
  color: #302b2b !important;
}
.ratio {
  position: relative;
  width: 100%;
}
.ratio:before {
  display: block;
  padding-top: var(--mdb-aspect-ratio);
  content: "";
}
.ratio > * {
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
}
.ratio-1x1 {
  --mdb-aspect-ratio: 100%;
}
.ratio-4x3 {
  --mdb-aspect-ratio: 75%;
}
.ratio-16x9 {
  --mdb-aspect-ratio: 56.25%;
}
.ratio-21x9 {
  --mdb-aspect-ratio: 42.8571428571%;
}
.fixed-top {
  top: 0;
}
.fixed-bottom,
.fixed-top {
  position: fixed;
  right: 0;
  left: 0;
  z-index: 1030;
}
.fixed-bottom {
  bottom: 0;
}
.sticky-top {
  top: 0;
}
.sticky-bottom,
.sticky-top {
  position: -webkit-sticky;
  position: sticky;
  z-index: 1020;
}
.sticky-bottom {
  bottom: 0;
}
@media (min-width: 576px) {
  .sticky-sm-top {
    top: 0;
  }
  .sticky-sm-bottom,
  .sticky-sm-top {
    position: -webkit-sticky;
    position: sticky;
    z-index: 1020;
  }
  .sticky-sm-bottom {
    bottom: 0;
  }
}
@media (min-width: 768px) {
  .sticky-md-top {
    top: 0;
  }
  .sticky-md-bottom,
  .sticky-md-top {
    position: -webkit-sticky;
    position: sticky;
    z-index: 1020;
  }
  .sticky-md-bottom {
    bottom: 0;
  }
}
@media (min-width: 992px) {
  .sticky-lg-top {
    top: 0;
  }
  .sticky-lg-bottom,
  .sticky-lg-top {
    position: -webkit-sticky;
    position: sticky;
    z-index: 1020;
  }
  .sticky-lg-bottom {
    bottom: 0;
  }
}
@media (min-width: 1200px) {
  .sticky-xl-top {
    top: 0;
  }
  .sticky-xl-bottom,
  .sticky-xl-top {
    position: -webkit-sticky;
    position: sticky;
    z-index: 1020;
  }
  .sticky-xl-bottom {
    bottom: 0;
  }
}
@media (min-width: 1400px) {
  .sticky-xxl-top {
    top: 0;
  }
  .sticky-xxl-bottom,
  .sticky-xxl-top {
    position: -webkit-sticky;
    position: sticky;
    z-index: 1020;
  }
  .sticky-xxl-bottom {
    bottom: 0;
  }
}
.hstack {
  flex-direction: row;
  align-items: center;
}
.hstack,
.vstack {
  display: flex;
  align-self: stretch;
}
.vstack {
  flex: 1 1 auto;
  flex-direction: column;
}
.visually-hidden,
.visually-hidden-focusable:not(:focus):not(:focus-within) {
  position: absolute !important;
  width: 1px !important;
  height: 1px !important;
  padding: 0 !important;
  margin: -1px !important;
  overflow: hidden !important;
  clip: rect(0, 0, 0, 0) !important;
  white-space: nowrap !important;
  border: 0 !important;
}
.stretched-link:after {
  position: absolute;
  top: 0;
  right: 0;
  bottom: 0;
  left: 0;
  z-index: 1;
  content: "";
}
.text-truncate {
  overflow: hidden;
  text-overflow: ellipsis;
  white-space: nowrap;
}
.vr {
  display: inline-block;
  align-self: stretch;
  width: 1px;
  min-height: 1em;
  background-color: currentcolor;
  opacity: 0.25;
}
.align-baseline {
  vertical-align: baseline !important;
}
.align-top {
  vertical-align: top !important;
}
.align-middle {
  vertical-align: middle !important;
}
.align-bottom {
  vertical-align: bottom !important;
}
.align-text-bottom {
  vertical-align: text-bottom !important;
}
.align-text-top {
  vertical-align: text-top !important;
}
.float-start {
  float: left !important;
}
.float-end {
  float: right !important;
}
.float-none {
  float: none !important;
}
.opacity-0 {
  opacity: 0 !important;
}
.opacity-5 {
  opacity: 0.05 !important;
}
.opacity-10 {
  opacity: 0.1 !important;
}
.opacity-15 {
  opacity: 0.15 !important;
}
.opacity-20 {
  opacity: 0.2 !important;
}
.opacity-25 {
  opacity: 0.25 !important;
}
.opacity-30 {
  opacity: 0.3 !important;
}
.opacity-35 {
  opacity: 0.35 !important;
}
.opacity-40 {
  opacity: 0.4 !important;
}
.opacity-45 {
  opacity: 0.45 !important;
}
.opacity-50 {
  opacity: 0.5 !important;
}
.opacity-55 {
  opacity: 0.55 !important;
}
.opacity-60 {
  opacity: 0.6 !important;
}
.opacity-65 {
  opacity: 0.65 !important;
}
.opacity-70 {
  opacity: 0.7 !important;
}
.opacity-75 {
  opacity: 0.75 !important;
}
.opacity-80 {
  opacity: 0.8 !important;
}
.opacity-85 {
  opacity: 0.85 !important;
}
.opacity-90 {
  opacity: 0.9 !important;
}
.opacity-95 {
  opacity: 0.95 !important;
}
.opacity-100 {
  opacity: 1 !important;
}
.overflow-auto {
  overflow: auto !important;
}
.overflow-hidden {
  overflow: hidden !important;
}
.overflow-visible {
  overflow: visible !important;
}
.overflow-scroll {
  overflow: scroll !important;
}
.d-inline {
  display: inline !important;
}
.d-inline-block {
  display: inline-block !important;
}
.d-block {
  display: block !important;
}
.d-grid {
  display: grid !important;
}
.d-table {
  display: table !important;
}
.d-table-row {
  display: table-row !important;
}
.d-table-cell {
  display: table-cell !important;
}
.d-flex {
  display: flex !important;
}
.d-inline-flex {
  display: inline-flex !important;
}
.d-none {
  display: none !important;
}
.shadow {
  box-shadow: 0 0.5rem 1rem rgba(0, 0, 0, 0.15) !important;
}
.shadow-sm {
  box-shadow: 0 0.125rem 0.25rem rgba(0, 0, 0, 0.075) !important;
}
.shadow-lg {
  box-shadow: 0 1rem 3rem rgba(0, 0, 0, 0.175) !important;
}
.shadow-0,
.shadow-none {
  box-shadow: none !important;
}
.shadow-1 {
  box-shadow: 0 0 2px 0 rgba(0, 0, 0, 0.07), 0 1px 1px 0 rgba(0, 0, 0, 0.04) !important;
}
.shadow-2 {
  box-shadow: 0 0 3px 0 rgba(0, 0, 0, 0.07), 0 2px 2px 0 rgba(0, 0, 0, 0.04) !important;
}
.shadow-3 {
  box-shadow: 0 2px 6px -1px rgba(0, 0, 0, 0.07),
    0 6px 18px -1px rgba(0, 0, 0, 0.04) !important;
}
.shadow-4 {
  box-shadow: 0 2px 15px -3px rgba(0, 0, 0, 0.07),
    0 10px 20px -2px rgba(0, 0, 0, 0.04) !important;
}
.shadow-5 {
  box-shadow: 0 2px 25px -5px rgba(0, 0, 0, 0.07),
    0 25px 21px -5px rgba(0, 0, 0, 0.04) !important;
}
.shadow-6 {
  box-shadow: 0 2px 35px -12px rgba(0, 0, 0, 0.21),
    0 50px 40px -5px rgba(0, 0, 0, 0.04) !important;
}
.shadow-1-soft {
  box-shadow: 0 1px 5px 0 rgba(0, 0, 0, 0.05) !important;
}
.shadow-2-soft {
  box-shadow: 0 2px 10px 0 rgba(0, 0, 0, 0.05) !important;
}
.shadow-3-soft {
  box-shadow: 0 5px 15px 0 rgba(0, 0, 0, 0.05) !important;
}
.shadow-4-soft {
  box-shadow: 0 10px 20px 0 rgba(0, 0, 0, 0.05) !important;
}
.shadow-5-soft {
  box-shadow: 0 15px 30px 0 rgba(0, 0, 0, 0.05) !important;
}
.shadow-6-soft {
  box-shadow: 0 20px 40px 0 rgba(0, 0, 0, 0.05) !important;
}
.shadow-1-strong {
  box-shadow: 0 0 2px 0 rgba(0, 0, 0, 0.16), 0 1px 1px 0 rgba(0, 0, 0, 0.1) !important;
}
.shadow-2-strong {
  box-shadow: 0 0 3px 0 rgba(0, 0, 0, 0.16), 0 2px 2px 0 rgba(0, 0, 0, 0.1) !important;
}
.shadow-3-strong {
  box-shadow: 0 2px 6px -1px rgba(0, 0, 0, 0.16),
    0 6px 18px -1px rgba(0, 0, 0, 0.1) !important;
}
.shadow-4-strong {
  box-shadow: 0 2px 15px -3px rgba(0, 0, 0, 0.16),
    0 10px 20px -2px rgba(0, 0, 0, 0.1) !important;
}
.shadow-5-strong {
  box-shadow: 0 2px 25px -5px rgba(0, 0, 0, 0.16),
    0 25px 21px -5px rgba(0, 0, 0, 0.1) !important;
}
.shadow-6-strong {
  box-shadow: 0 2px 35px -12px rgba(0, 0, 0, 0.26),
    0 50px 40px -5px rgba(0, 0, 0, 0.1) !important;
}
.shadow-inner {
  box-shadow: inset 0 2px 4px 0 rgba(0, 0, 0, 0.06) !important;
}
.position-static {
  position: static !important;
}
.position-relative {
  position: relative !important;
}
.position-absolute {
  position: absolute !important;
}
.position-fixed {
  position: fixed !important;
}
.position-sticky {
  position: -webkit-sticky !important;
  position: sticky !important;
}
.top-0 {
  top: 0 !important;
}
.top-50 {
  top: 50% !important;
}
.top-100 {
  top: 100% !important;
}
.bottom-0 {
  bottom: 0 !important;
}
.bottom-50 {
  bottom: 50% !important;
}
.bottom-100 {
  bottom: 100% !important;
}
.start-0 {
  left: 0 !important;
}
.start-50 {
  left: 50% !important;
}
.start-100 {
  left: 100% !important;
}
.end-0 {
  right: 0 !important;
}
.end-50 {
  right: 50% !important;
}
.end-100 {
  right: 100% !important;
}
.translate-middle {
  transform: translate(-50%, -50%) !important;
}
.translate-middle-x {
  transform: translateX(-50%) !important;
}
.translate-middle-y {
  transform: translateY(-50%) !important;
}
.border {
  border: var(--mdb-border-width) var(--mdb-border-style)
    var(--mdb-border-color) !important;
}
.border-0 {
  border: 0 !important;
}
.border-top {
  border-top: var(--mdb-border-width) var(--mdb-border-style)
    var(--mdb-border-color) !important;
}
.border-top-0 {
  border-top: 0 !important;
}
.border-end {
  border-right: var(--mdb-border-width) var(--mdb-border-style)
    var(--mdb-border-color) !important;
}
.border-end-0 {
  border-right: 0 !important;
}
.border-bottom {
  border-bottom: var(--mdb-border-width) var(--mdb-border-style)
    var(--mdb-border-color) !important;
}
.border-bottom-0 {
  border-bottom: 0 !important;
}
.border-start {
  border-left: var(--mdb-border-width) var(--mdb-border-style)
    var(--mdb-border-color) !important;
}
.border-start-0 {
  border-left: 0 !important;
}
.border-primary {
  --mdb-border-opacity: 1;
  border-color: rgba(
    var(--mdb-primary-rgb),
    var(--mdb-border-opacity)
  ) !important;
}
.border-secondary {
  --mdb-border-opacity: 1;
  border-color: rgba(
    var(--mdb-secondary-rgb),
    var(--mdb-border-opacity)
  ) !important;
}
.border-success {
  --mdb-border-opacity: 1;
  border-color: rgba(
    var(--mdb-success-rgb),
    var(--mdb-border-opacity)
  ) !important;
}
.border-danger {
  --mdb-border-opacity: 1;
  border-color: rgba(
    var(--mdb-danger-rgb),
    var(--mdb-border-opacity)
  ) !important;
}
.border-warning {
  --mdb-border-opacity: 1;
  border-color: rgba(
    var(--mdb-warning-rgb),
    var(--mdb-border-opacity)
  ) !important;
}
.border-info {
  --mdb-border-opacity: 1;
  border-color: rgba(var(--mdb-info-rgb), var(--mdb-border-opacity)) !important;
}
.border-light {
  --mdb-border-opacity: 1;
  border-color: rgba(
    var(--mdb-light-rgb),
    var(--mdb-border-opacity)
  ) !important;
}
.border-dark {
  --mdb-border-opacity: 1;
  border-color: rgba(var(--mdb-dark-rgb), var(--mdb-border-opacity)) !important;
}
.border-white {
  --mdb-border-opacity: 1;
  border-color: rgba(
    var(--mdb-white-rgb),
    var(--mdb-border-opacity)
  ) !important;
}
.border-1 {
  --mdb-border-width: 1px;
}
.border-2 {
  --mdb-border-width: 2px;
}
.border-3 {
  --mdb-border-width: 3px;
}
.border-4 {
  --mdb-border-width: 4px;
}
.border-5 {
  --mdb-border-width: 5px;
}
.border-opacity-10 {
  --mdb-border-opacity: 0.1;
}
.border-opacity-25 {
  --mdb-border-opacity: 0.25;
}
.border-opacity-50 {
  --mdb-border-opacity: 0.5;
}
.border-opacity-75 {
  --mdb-border-opacity: 0.75;
}
.border-opacity-100 {
  --mdb-border-opacity: 1;
}
.w-25 {
  width: 25% !important;
}
.w-50 {
  width: 50% !important;
}
.w-75 {
  width: 75% !important;
}
.w-100 {
  width: 100% !important;
}
.w-auto {
  width: auto !important;
}
.mw-100 {
  max-width: 100% !important;
}
.vw-100 {
  width: 100vw !important;
}
.min-vw-100 {
  min-width: 100vw !important;
}
.h-25 {
  height: 25% !important;
}
.h-50 {
  height: 50% !important;
}
.h-75 {
  height: 75% !important;
}
.h-100 {
  height: 100% !important;
}
.h-auto {
  height: auto !important;
}
.mh-100 {
  max-height: 100% !important;
}
.vh-100 {
  height: 100vh !important;
}
.min-vh-100 {
  min-height: 100vh !important;
}
.flex-fill {
  flex: 1 1 auto !important;
}
.flex-row {
  flex-direction: row !important;
}
.flex-column {
  flex-direction: column !important;
}
.flex-row-reverse {
  flex-direction: row-reverse !important;
}
.flex-column-reverse {
  flex-direction: column-reverse !important;
}
.flex-grow-0 {
  flex-grow: 0 !important;
}
.flex-grow-1 {
  flex-grow: 1 !important;
}
.flex-shrink-0 {
  flex-shrink: 0 !important;
}
.flex-shrink-1 {
  flex-shrink: 1 !important;
}
.flex-wrap {
  flex-wrap: wrap !important;
}
.flex-nowrap {
  flex-wrap: nowrap !important;
}
.flex-wrap-reverse {
  flex-wrap: wrap-reverse !important;
}
.justify-content-start {
  justify-content: flex-start !important;
}
.justify-content-end {
  justify-content: flex-end !important;
}
.justify-content-center {
  justify-content: center !important;
}
.justify-content-between {
  justify-content: space-between !important;
}
.justify-content-around {
  justify-content: space-around !important;
}
.justify-content-evenly {
  justify-content: space-evenly !important;
}
.align-items-start {
  align-items: flex-start !important;
}
.align-items-end {
  align-items: flex-end !important;
}
.align-items-center {
  align-items: center !important;
}
.align-items-baseline {
  align-items: baseline !important;
}
.align-items-stretch {
  align-items: stretch !important;
}
.align-content-start {
  align-content: flex-start !important;
}
.align-content-end {
  align-content: flex-end !important;
}
.align-content-center {
  align-content: center !important;
}
.align-content-between {
  align-content: space-between !important;
}
.align-content-around {
  align-content: space-around !important;
}
.align-content-stretch {
  align-content: stretch !important;
}
.align-self-auto {
  align-self: auto !important;
}
.align-self-start {
  align-self: flex-start !important;
}
.align-self-end {
  align-self: flex-end !important;
}
.align-self-center {
  align-self: center !important;
}
.align-self-baseline {
  align-self: baseline !important;
}
.align-self-stretch {
  align-self: stretch !important;
}
.order-first {
  order: -1 !important;
}
.order-0 {
  order: 0 !important;
}
.order-1 {
  order: 1 !important;
}
.order-2 {
  order: 2 !important;
}
.order-3 {
  order: 3 !important;
}
.order-4 {
  order: 4 !important;
}
.order-5 {
  order: 5 !important;
}
.order-last {
  order: 6 !important;
}
.m-0 {
  margin: 0 !important;
}
.m-1 {
  margin: 0.25rem !important;
}
.m-2 {
  margin: 0.5rem !important;
}
.m-3 {
  margin: 1rem !important;
}
.m-4 {
  margin: 1.5rem !important;
}
.m-5 {
  margin: 3rem !important;
}
.m-auto {
  margin: auto !important;
}
.mx-0 {
  margin-right: 0 !important;
  margin-left: 0 !important;
}
.mx-1 {
  margin-right: 0.25rem !important;
  margin-left: 0.25rem !important;
}
.mx-2 {
  margin-right: 0.5rem !important;
  margin-left: 0.5rem !important;
}
.mx-3 {
  margin-right: 1rem !important;
  margin-left: 1rem !important;
}
.mx-4 {
  margin-right: 1.5rem !important;
  margin-left: 1.5rem !important;
}
.mx-5 {
  margin-right: 3rem !important;
  margin-left: 3rem !important;
}
.mx-auto {
  margin-right: auto !important;
  margin-left: auto !important;
}
.my-0 {
  margin-top: 0 !important;
  margin-bottom: 0 !important;
}
.my-1 {
  margin-top: 0.25rem !important;
  margin-bottom: 0.25rem !important;
}
.my-2 {
  margin-top: 0.5rem !important;
  margin-bottom: 0.5rem !important;
}
.my-3 {
  margin-top: 1rem !important;
  margin-bottom: 1rem !important;
}
.my-4 {
  margin-top: 1.5rem !important;
  margin-bottom: 1.5rem !important;
}
.my-5 {
  margin-top: 3rem !important;
  margin-bottom: 3rem !important;
}
.my-auto {
  margin-top: auto !important;
  margin-bottom: auto !important;
}
.mt-0 {
  margin-top: 0 !important;
}
.mt-1 {
  margin-top: 0.25rem !important;
}
.mt-2 {
  margin-top: 0.5rem !important;
}
.mt-3 {
  margin-top: 1rem !important;
}
.mt-4 {
  margin-top: 1.5rem !important;
}
.mt-5 {
  margin-top: 3rem !important;
}
.mt-auto {
  margin-top: auto !important;
}
.me-0 {
  margin-right: 0 !important;
}
.me-1 {
  margin-right: 0.25rem !important;
}
.me-2 {
  margin-right: 0.5rem !important;
}
.me-3 {
  margin-right: 1rem !important;
}
.me-4 {
  margin-right: 1.5rem !important;
}
.me-5 {
  margin-right: 3rem !important;
}
.me-auto {
  margin-right: auto !important;
}
.mb-0 {
  margin-bottom: 0 !important;
}
.mb-1 {
  margin-bottom: 0.25rem !important;
}
.mb-2 {
  margin-bottom: 0.5rem !important;
}
.mb-3 {
  margin-bottom: 1rem !important;
}
.mb-4 {
  margin-bottom: 1.5rem !important;
}
.mb-5 {
  margin-bottom: 3rem !important;
}
.mb-auto {
  margin-bottom: auto !important;
}
.mb-6 {
  margin-bottom: 3.5rem !important;
}
.mb-7 {
  margin-bottom: 4rem !important;
}
.mb-8 {
  margin-bottom: 5rem !important;
}
.mb-9 {
  margin-bottom: 6rem !important;
}
.mb-10 {
  margin-bottom: 8rem !important;
}
.mb-11 {
  margin-bottom: 10rem !important;
}
.mb-12 {
  margin-bottom: 12rem !important;
}
.mb-13 {
  margin-bottom: 14rem !important;
}
.mb-14 {
  margin-bottom: 16rem !important;
}
.ms-0 {
  margin-left: 0 !important;
}
.ms-1 {
  margin-left: 0.25rem !important;
}
.ms-2 {
  margin-left: 0.5rem !important;
}
.ms-3 {
  margin-left: 1rem !important;
}
.ms-4 {
  margin-left: 1.5rem !important;
}
.ms-5 {
  margin-left: 3rem !important;
}
.ms-auto {
  margin-left: auto !important;
}
.m-n1 {
  margin: -0.25rem !important;
}
.m-n2 {
  margin: -0.5rem !important;
}
.m-n3 {
  margin: -1rem !important;
}
.m-n4 {
  margin: -1.5rem !important;
}
.m-n5 {
  margin: -3rem !important;
}
.mx-n1 {
  margin-right: -0.25rem !important;
  margin-left: -0.25rem !important;
}
.mx-n2 {
  margin-right: -0.5rem !important;
  margin-left: -0.5rem !important;
}
.mx-n3 {
  margin-right: -1rem !important;
  margin-left: -1rem !important;
}
.mx-n4 {
  margin-right: -1.5rem !important;
  margin-left: -1.5rem !important;
}
.mx-n5 {
  margin-right: -3rem !important;
  margin-left: -3rem !important;
}
.my-n1 {
  margin-top: -0.25rem !important;
  margin-bottom: -0.25rem !important;
}
.my-n2 {
  margin-top: -0.5rem !important;
  margin-bottom: -0.5rem !important;
}
.my-n3 {
  margin-top: -1rem !important;
  margin-bottom: -1rem !important;
}
.my-n4 {
  margin-top: -1.5rem !important;
  margin-bottom: -1.5rem !important;
}
.my-n5 {
  margin-top: -3rem !important;
  margin-bottom: -3rem !important;
}
.mt-n1 {
  margin-top: -0.25rem !important;
}
.mt-n2 {
  margin-top: -0.5rem !important;
}
.mt-n3 {
  margin-top: -1rem !important;
}
.mt-n4 {
  margin-top: -1.5rem !important;
}
.mt-n5 {
  margin-top: -3rem !important;
}
.me-n1 {
  margin-right: -0.25rem !important;
}
.me-n2 {
  margin-right: -0.5rem !important;
}
.me-n3 {
  margin-right: -1rem !important;
}
.me-n4 {
  margin-right: -1.5rem !important;
}
.me-n5 {
  margin-right: -3rem !important;
}
.mb-n1 {
  margin-bottom: -0.25rem !important;
}
.mb-n2 {
  margin-bottom: -0.5rem !important;
}
.mb-n3 {
  margin-bottom: -1rem !important;
}
.mb-n4 {
  margin-bottom: -1.5rem !important;
}
.mb-n5 {
  margin-bottom: -3rem !important;
}
.ms-n1 {
  margin-left: -0.25rem !important;
}
.ms-n2 {
  margin-left: -0.5rem !important;
}
.ms-n3 {
  margin-left: -1rem !important;
}
.ms-n4 {
  margin-left: -1.5rem !important;
}
.ms-n5 {
  margin-left: -3rem !important;
}
.p-0 {
  padding: 0 !important;
}
.p-1 {
  padding: 0.25rem !important;
}
.p-2 {
  padding: 0.5rem !important;
}
.p-3 {
  padding: 1rem !important;
}
.p-4 {
  padding: 1.5rem !important;
}
.p-5 {
  padding: 3rem !important;
}
.px-0 {
  padding-right: 0 !important;
  padding-left: 0 !important;
}
.px-1 {
  padding-right: 0.25rem !important;
  padding-left: 0.25rem !important;
}
.px-2 {
  padding-right: 0.5rem !important;
  padding-left: 0.5rem !important;
}
.px-3 {
  padding-right: 1rem !important;
  padding-left: 1rem !important;
}
.px-4 {
  padding-right: 1.5rem !important;
  padding-left: 1.5rem !important;
}
.px-5 {
  padding-right: 3rem !important;
  padding-left: 3rem !important;
}
.py-0 {
  padding-top: 0 !important;
  padding-bottom: 0 !important;
}
.py-1 {
  padding-top: 0.25rem !important;
  padding-bottom: 0.25rem !important;
}
.py-2 {
  padding-top: 0.5rem !important;
  padding-bottom: 0.5rem !important;
}
.py-3 {
  padding-top: 1rem !important;
  padding-bottom: 1rem !important;
}
.py-4 {
  padding-top: 1.5rem !important;
  padding-bottom: 1.5rem !important;
}
.py-5 {
  padding-top: 3rem !important;
  padding-bottom: 3rem !important;
}
.pt-0 {
  padding-top: 0 !important;
}
.pt-1 {
  padding-top: 0.25rem !important;
}
.pt-2 {
  padding-top: 0.5rem !important;
}
.pt-3 {
  padding-top: 1rem !important;
}
.pt-4 {
  padding-top: 1.5rem !important;
}
.pt-5 {
  padding-top: 3rem !important;
}
.pe-0 {
  padding-right: 0 !important;
}
.pe-1 {
  padding-right: 0.25rem !important;
}
.pe-2 {
  padding-right: 0.5rem !important;
}
.pe-3 {
  padding-right: 1rem !important;
}
.pe-4 {
  padding-right: 1.5rem !important;
}
.pe-5 {
  padding-right: 3rem !important;
}
.pb-0 {
  padding-bottom: 0 !important;
}
.pb-1 {
  padding-bottom: 0.25rem !important;
}
.pb-2 {
  padding-bottom: 0.5rem !important;
}
.pb-3 {
  padding-bottom: 1rem !important;
}
.pb-4 {
  padding-bottom: 1.5rem !important;
}
.pb-5 {
  padding-bottom: 3rem !important;
}
.ps-0 {
  padding-left: 0 !important;
}
.ps-1 {
  padding-left: 0.25rem !important;
}
.ps-2 {
  padding-left: 0.5rem !important;
}
.ps-3 {
  padding-left: 1rem !important;
}
.ps-4 {
  padding-left: 1.5rem !important;
}
.ps-5 {
  padding-left: 3rem !important;
}
.gap-0 {
  gap: 0 !important;
}
.gap-1 {
  gap: 0.25rem !important;
}
.gap-2 {
  gap: 0.5rem !important;
}
.gap-3 {
  gap: 1rem !important;
}
.gap-4 {
  gap: 1.5rem !important;
}
.gap-5 {
  gap: 3rem !important;
}
.font-monospace {
  font-family: var(--mdb-font-monospace) !important;
}
.fs-1 {
  font-size: calc(1.375rem + 1.5vw) !important;
}
.fs-2 {
  font-size: calc(1.325rem + 0.9vw) !important;
}
.fs-3 {
  font-size: calc(1.3rem + 0.6vw) !important;
}
.fs-4 {
  font-size: calc(1.275rem + 0.3vw) !important;
}
.fs-5 {
  font-size: 1.25rem !important;
}
.fs-6 {
  font-size: 1rem !important;
}
.fst-italic {
  font-style: italic !important;
}
.fst-normal {
  font-style: normal !important;
}
.fw-light {
  font-weight: 300 !important;
}
.fw-lighter {
  font-weight: lighter !important;
}
.fw-normal {
  font-weight: 400 !important;
}
.fw-bold {
  font-weight: 700 !important;
}
.fw-semibold {
  font-weight: 600 !important;
}
.fw-bolder {
  font-weight: bolder !important;
}
.lh-1 {
  line-height: 1 !important;
}
.lh-sm {
  line-height: 1.25 !important;
}
.lh-base {
  line-height: 1.6 !important;
}
.lh-lg {
  line-height: 2 !important;
}
.text-start {
  text-align: left !important;
}
.text-end {
  text-align: right !important;
}
.text-center {
  text-align: center !important;
}
.text-decoration-none {
  text-decoration: none !important;
}
.text-decoration-underline {
  text-decoration: underline !important;
}
.text-decoration-line-through {
  text-decoration: line-through !important;
}
.text-lowercase {
  text-transform: lowercase !important;
}
.text-uppercase {
  text-transform: uppercase !important;
}
.text-capitalize {
  text-transform: capitalize !important;
}
.text-wrap {
  white-space: normal !important;
}
.text-nowrap {
  white-space: nowrap !important;
} /*!rtl:begin:remove*/
.text-break {
  word-wrap: break-word !important;
  word-break: break-word !important;
} /*!rtl:end:remove*/
.text-primary {
  --mdb-text-opacity: 1;
  color: rgba(var(--mdb-primary-rgb), var(--mdb-text-opacity)) !important;
}
.text-secondary {
  --mdb-text-opacity: 1;
  color: rgba(var(--mdb-secondary-rgb), var(--mdb-text-opacity)) !important;
}
.text-success {
  --mdb-text-opacity: 1;
  color: rgba(var(--mdb-success-rgb), var(--mdb-text-opacity)) !important;
}
.text-danger {
  --mdb-text-opacity: 1;
  color: rgba(var(--mdb-danger-rgb), var(--mdb-text-opacity)) !important;
}
.text-warning {
  --mdb-text-opacity: 1;
  color: rgba(var(--mdb-warning-rgb), var(--mdb-text-opacity)) !important;
}
.text-info {
  --mdb-text-opacity: 1;
  color: rgba(var(--mdb-info-rgb), var(--mdb-text-opacity)) !important;
}
.text-light {
  --mdb-text-opacity: 1;
  color: rgba(var(--mdb-light-rgb), var(--mdb-text-opacity)) !important;
}
.text-dark {
  --mdb-text-opacity: 1;
  color: rgba(var(--mdb-dark-rgb), var(--mdb-text-opacity)) !important;
}
.text-black {
  --mdb-text-opacity: 1;
  color: rgba(var(--mdb-black-rgb), var(--mdb-text-opacity)) !important;
}
.text-white {
  --mdb-text-opacity: 1;
  color: rgba(var(--mdb-white-rgb), var(--mdb-text-opacity)) !important;
}
.text-body {
  --mdb-text-opacity: 1;
  color: rgba(var(--mdb-body-color-rgb), var(--mdb-text-opacity)) !important;
}
.text-muted {
  --mdb-text-opacity: 1;
  color: #757575 !important;
}
.text-black-50 {
  --mdb-text-opacity: 1;
  color: rgba(0, 0, 0, 0.5) !important;
}
.text-white-50 {
  --mdb-text-opacity: 1;
  color: hsla(0, 0%, 100%, 0.5) !important;
}
.text-reset {
  --mdb-text-opacity: 1;
  color: inherit !important;
}
.text-opacity-25 {
  --mdb-text-opacity: 0.25;
}
.text-opacity-50 {
  --mdb-text-opacity: 0.5;
}
.text-opacity-75 {
  --mdb-text-opacity: 0.75;
}
.text-opacity-100 {
  --mdb-text-opacity: 1;
}
.bg-primary {
  --mdb-bg-opacity: 1;
  background-color: rgba(
    var(--mdb-primary-rgb),
    var(--mdb-bg-opacity)
  ) !important;
}
.bg-secondary {
  --mdb-bg-opacity: 1;
  background-color: rgba(
    var(--mdb-secondary-rgb),
    var(--mdb-bg-opacity)
  ) !important;
}
.bg-success {
  --mdb-bg-opacity: 1;
  background-color: rgba(
    var(--mdb-success-rgb),
    var(--mdb-bg-opacity)
  ) !important;
}
.bg-danger {
  --mdb-bg-opacity: 1;
  background-color: rgba(
    var(--mdb-danger-rgb),
    var(--mdb-bg-opacity)
  ) !important;
}
.bg-warning {
  --mdb-bg-opacity: 1;
  background-color: rgba(
    var(--mdb-warning-rgb),
    var(--mdb-bg-opacity)
  ) !important;
}
.bg-info {
  --mdb-bg-opacity: 1;
  background-color: rgba(var(--mdb-info-rgb), var(--mdb-bg-opacity)) !important;
}
.bg-light {
  --mdb-bg-opacity: 1;
  background-color: rgba(
    var(--mdb-light-rgb),
    var(--mdb-bg-opacity)
  ) !important;
}
.bg-dark {
  --mdb-bg-opacity: 1;
  background-color: rgba(var(--mdb-dark-rgb), var(--mdb-bg-opacity)) !important;
}
.bg-black {
  --mdb-bg-opacity: 1;
  background-color: rgba(
    var(--mdb-black-rgb),
    var(--mdb-bg-opacity)
  ) !important;
}
.bg-white {
  --mdb-bg-opacity: 1;
  background-color: rgba(
    var(--mdb-white-rgb),
    var(--mdb-bg-opacity)
  ) !important;
}
.bg-body {
  --mdb-bg-opacity: 1;
  background-color: rgba(
    var(--mdb-body-bg-rgb),
    var(--mdb-bg-opacity)
  ) !important;
}
.bg-transparent {
  --mdb-bg-opacity: 1;
  background-color: transparent !important;
}
.bg-opacity-10 {
  --mdb-bg-opacity: 0.1;
}
.bg-opacity-25 {
  --mdb-bg-opacity: 0.25;
}
.bg-opacity-50 {
  --mdb-bg-opacity: 0.5;
}
.bg-opacity-75 {
  --mdb-bg-opacity: 0.75;
}
.bg-opacity-100 {
  --mdb-bg-opacity: 1;
}
.bg-gradient {
  background-image: var(--mdb-gradient) !important;
}
.user-select-all {
  -webkit-user-select: all !important;
  -moz-user-select: all !important;
  user-select: all !important;
}
.user-select-auto {
  -webkit-user-select: auto !important;
  -moz-user-select: auto !important;
  user-select: auto !important;
}
.user-select-none {
  -webkit-user-select: none !important;
  -moz-user-select: none !important;
  user-select: none !important;
}
.pe-none {
  pointer-events: none !important;
}
.pe-auto {
  pointer-events: auto !important;
}
.rounded {
  border-radius: var(--mdb-border-radius) !important;
}
.rounded-0 {
  border-radius: 0 !important;
}
.rounded-1 {
  border-radius: var(--mdb-border-radius-sm) !important;
}
.rounded-2 {
  border-radius: var(--mdb-border-radius) !important;
}
.rounded-3 {
  border-radius: var(--mdb-border-radius-lg) !important;
}
.rounded-4 {
  border-radius: 0.375rem !important;
}
.rounded-5 {
  border-radius: 0.5rem !important;
}
.rounded-circle {
  border-radius: 50% !important;
}
.rounded-pill {
  border-radius: var(--mdb-border-radius-pill) !important;
}
.rounded-6 {
  border-radius: 0.75rem !important;
}
.rounded-7 {
  border-radius: 1rem !important;
}
.rounded-8 {
  border-radius: 1.25rem !important;
}
.rounded-9 {
  border-radius: 1.5rem !important;
}
.rounded-top {
  border-top-left-radius: var(--mdb-border-radius) !important;
}
.rounded-end,
.rounded-top {
  border-top-right-radius: var(--mdb-border-radius) !important;
}
.rounded-bottom,
.rounded-end {
  border-bottom-right-radius: var(--mdb-border-radius) !important;
}
.rounded-bottom,
.rounded-start {
  border-bottom-left-radius: var(--mdb-border-radius) !important;
}
.rounded-start {
  border-top-left-radius: var(--mdb-border-radius) !important;
}
.visible {
  visibility: visible !important;
}
.invisible {
  visibility: hidden !important;
}
.ls-tighter {
  letter-spacing: -0.05em !important;
}
.ls-tight {
  letter-spacing: -0.025em !important;
}
.ls-normal {
  letter-spacing: 0 !important;
}
.ls-wide {
  letter-spacing: 0.025em !important;
}
.ls-wider {
  letter-spacing: 0.05em !important;
}
.ls-widest {
  letter-spacing: 0.1em !important;
}
.object-cover {
  -o-object-fit: cover !important;
  object-fit: cover !important;
}
.object-top {
  -o-object-position: top !important;
  object-position: top !important;
}
.object-center {
  -o-object-position: center !important;
  object-position: center !important;
}
.object-bottom {
  -o-object-position: bottom !important;
  object-position: bottom !important;
}
@media (min-width: 576px) {
  .float-sm-start {
    float: left !important;
  }
  .float-sm-end {
    float: right !important;
  }
  .float-sm-none {
    float: none !important;
  }
  .d-sm-inline {
    display: inline !important;
  }
  .d-sm-inline-block {
    display: inline-block !important;
  }
  .d-sm-block {
    display: block !important;
  }
  .d-sm-grid {
    display: grid !important;
  }
  .d-sm-table {
    display: table !important;
  }
  .d-sm-table-row {
    display: table-row !important;
  }
  .d-sm-table-cell {
    display: table-cell !important;
  }
  .d-sm-flex {
    display: flex !important;
  }
  .d-sm-inline-flex {
    display: inline-flex !important;
  }
  .d-sm-none {
    display: none !important;
  }
  .flex-sm-fill {
    flex: 1 1 auto !important;
  }
  .flex-sm-row {
    flex-direction: row !important;
  }
  .flex-sm-column {
    flex-direction: column !important;
  }
  .flex-sm-row-reverse {
    flex-direction: row-reverse !important;
  }
  .flex-sm-column-reverse {
    flex-direction: column-reverse !important;
  }
  .flex-sm-grow-0 {
    flex-grow: 0 !important;
  }
  .flex-sm-grow-1 {
    flex-grow: 1 !important;
  }
  .flex-sm-shrink-0 {
    flex-shrink: 0 !important;
  }
  .flex-sm-shrink-1 {
    flex-shrink: 1 !important;
  }
  .flex-sm-wrap {
    flex-wrap: wrap !important;
  }
  .flex-sm-nowrap {
    flex-wrap: nowrap !important;
  }
  .flex-sm-wrap-reverse {
    flex-wrap: wrap-reverse !important;
  }
  .justify-content-sm-start {
    justify-content: flex-start !important;
  }
  .justify-content-sm-end {
    justify-content: flex-end !important;
  }
  .justify-content-sm-center {
    justify-content: center !important;
  }
  .justify-content-sm-between {
    justify-content: space-between !important;
  }
  .justify-content-sm-around {
    justify-content: space-around !important;
  }
  .justify-content-sm-evenly {
    justify-content: space-evenly !important;
  }
  .align-items-sm-start {
    align-items: flex-start !important;
  }
  .align-items-sm-end {
    align-items: flex-end !important;
  }
  .align-items-sm-center {
    align-items: center !important;
  }
  .align-items-sm-baseline {
    align-items: baseline !important;
  }
  .align-items-sm-stretch {
    align-items: stretch !important;
  }
  .align-content-sm-start {
    align-content: flex-start !important;
  }
  .align-content-sm-end {
    align-content: flex-end !important;
  }
  .align-content-sm-center {
    align-content: center !important;
  }
  .align-content-sm-between {
    align-content: space-between !important;
  }
  .align-content-sm-around {
    align-content: space-around !important;
  }
  .align-content-sm-stretch {
    align-content: stretch !important;
  }
  .align-self-sm-auto {
    align-self: auto !important;
  }
  .align-self-sm-start {
    align-self: flex-start !important;
  }
  .align-self-sm-end {
    align-self: flex-end !important;
  }
  .align-self-sm-center {
    align-self: center !important;
  }
  .align-self-sm-baseline {
    align-self: baseline !important;
  }
  .align-self-sm-stretch {
    align-self: stretch !important;
  }
  .order-sm-first {
    order: -1 !important;
  }
  .order-sm-0 {
    order: 0 !important;
  }
  .order-sm-1 {
    order: 1 !important;
  }
  .order-sm-2 {
    order: 2 !important;
  }
  .order-sm-3 {
    order: 3 !important;
  }
  .order-sm-4 {
    order: 4 !important;
  }
  .order-sm-5 {
    order: 5 !important;
  }
  .order-sm-last {
    order: 6 !important;
  }
  .m-sm-0 {
    margin: 0 !important;
  }
  .m-sm-1 {
    margin: 0.25rem !important;
  }
  .m-sm-2 {
    margin: 0.5rem !important;
  }
  .m-sm-3 {
    margin: 1rem !important;
  }
  .m-sm-4 {
    margin: 1.5rem !important;
  }
  .m-sm-5 {
    margin: 3rem !important;
  }
  .m-sm-auto {
    margin: auto !important;
  }
  .mx-sm-0 {
    margin-right: 0 !important;
    margin-left: 0 !important;
  }
  .mx-sm-1 {
    margin-right: 0.25rem !important;
    margin-left: 0.25rem !important;
  }
  .mx-sm-2 {
    margin-right: 0.5rem !important;
    margin-left: 0.5rem !important;
  }
  .mx-sm-3 {
    margin-right: 1rem !important;
    margin-left: 1rem !important;
  }
  .mx-sm-4 {
    margin-right: 1.5rem !important;
    margin-left: 1.5rem !important;
  }
  .mx-sm-5 {
    margin-right: 3rem !important;
    margin-left: 3rem !important;
  }
  .mx-sm-auto {
    margin-right: auto !important;
    margin-left: auto !important;
  }
  .my-sm-0 {
    margin-top: 0 !important;
    margin-bottom: 0 !important;
  }
  .my-sm-1 {
    margin-top: 0.25rem !important;
    margin-bottom: 0.25rem !important;
  }
  .my-sm-2 {
    margin-top: 0.5rem !important;
    margin-bottom: 0.5rem !important;
  }
  .my-sm-3 {
    margin-top: 1rem !important;
    margin-bottom: 1rem !important;
  }
  .my-sm-4 {
    margin-top: 1.5rem !important;
    margin-bottom: 1.5rem !important;
  }
  .my-sm-5 {
    margin-top: 3rem !important;
    margin-bottom: 3rem !important;
  }
  .my-sm-auto {
    margin-top: auto !important;
    margin-bottom: auto !important;
  }
  .mt-sm-0 {
    margin-top: 0 !important;
  }
  .mt-sm-1 {
    margin-top: 0.25rem !important;
  }
  .mt-sm-2 {
    margin-top: 0.5rem !important;
  }
  .mt-sm-3 {
    margin-top: 1rem !important;
  }
  .mt-sm-4 {
    margin-top: 1.5rem !important;
  }
  .mt-sm-5 {
    margin-top: 3rem !important;
  }
  .mt-sm-auto {
    margin-top: auto !important;
  }
  .me-sm-0 {
    margin-right: 0 !important;
  }
  .me-sm-1 {
    margin-right: 0.25rem !important;
  }
  .me-sm-2 {
    margin-right: 0.5rem !important;
  }
  .me-sm-3 {
    margin-right: 1rem !important;
  }
  .me-sm-4 {
    margin-right: 1.5rem !important;
  }
  .me-sm-5 {
    margin-right: 3rem !important;
  }
  .me-sm-auto {
    margin-right: auto !important;
  }
  .mb-sm-0 {
    margin-bottom: 0 !important;
  }
  .mb-sm-1 {
    margin-bottom: 0.25rem !important;
  }
  .mb-sm-2 {
    margin-bottom: 0.5rem !important;
  }
  .mb-sm-3 {
    margin-bottom: 1rem !important;
  }
  .mb-sm-4 {
    margin-bottom: 1.5rem !important;
  }
  .mb-sm-5 {
    margin-bottom: 3rem !important;
  }
  .mb-sm-auto {
    margin-bottom: auto !important;
  }
  .mb-sm-6 {
    margin-bottom: 3.5rem !important;
  }
  .mb-sm-7 {
    margin-bottom: 4rem !important;
  }
  .mb-sm-8 {
    margin-bottom: 5rem !important;
  }
  .mb-sm-9 {
    margin-bottom: 6rem !important;
  }
  .mb-sm-10 {
    margin-bottom: 8rem !important;
  }
  .mb-sm-11 {
    margin-bottom: 10rem !important;
  }
  .mb-sm-12 {
    margin-bottom: 12rem !important;
  }
  .mb-sm-13 {
    margin-bottom: 14rem !important;
  }
  .mb-sm-14 {
    margin-bottom: 16rem !important;
  }
  .ms-sm-0 {
    margin-left: 0 !important;
  }
  .ms-sm-1 {
    margin-left: 0.25rem !important;
  }
  .ms-sm-2 {
    margin-left: 0.5rem !important;
  }
  .ms-sm-3 {
    margin-left: 1rem !important;
  }
  .ms-sm-4 {
    margin-left: 1.5rem !important;
  }
  .ms-sm-5 {
    margin-left: 3rem !important;
  }
  .ms-sm-auto {
    margin-left: auto !important;
  }
  .m-sm-n1 {
    margin: -0.25rem !important;
  }
  .m-sm-n2 {
    margin: -0.5rem !important;
  }
  .m-sm-n3 {
    margin: -1rem !important;
  }
  .m-sm-n4 {
    margin: -1.5rem !important;
  }
  .m-sm-n5 {
    margin: -3rem !important;
  }
  .mx-sm-n1 {
    margin-right: -0.25rem !important;
    margin-left: -0.25rem !important;
  }
  .mx-sm-n2 {
    margin-right: -0.5rem !important;
    margin-left: -0.5rem !important;
  }
  .mx-sm-n3 {
    margin-right: -1rem !important;
    margin-left: -1rem !important;
  }
  .mx-sm-n4 {
    margin-right: -1.5rem !important;
    margin-left: -1.5rem !important;
  }
  .mx-sm-n5 {
    margin-right: -3rem !important;
    margin-left: -3rem !important;
  }
  .my-sm-n1 {
    margin-top: -0.25rem !important;
    margin-bottom: -0.25rem !important;
  }
  .my-sm-n2 {
    margin-top: -0.5rem !important;
    margin-bottom: -0.5rem !important;
  }
  .my-sm-n3 {
    margin-top: -1rem !important;
    margin-bottom: -1rem !important;
  }
  .my-sm-n4 {
    margin-top: -1.5rem !important;
    margin-bottom: -1.5rem !important;
  }
  .my-sm-n5 {
    margin-top: -3rem !important;
    margin-bottom: -3rem !important;
  }
  .mt-sm-n1 {
    margin-top: -0.25rem !important;
  }
  .mt-sm-n2 {
    margin-top: -0.5rem !important;
  }
  .mt-sm-n3 {
    margin-top: -1rem !important;
  }
  .mt-sm-n4 {
    margin-top: -1.5rem !important;
  }
  .mt-sm-n5 {
    margin-top: -3rem !important;
  }
  .me-sm-n1 {
    margin-right: -0.25rem !important;
  }
  .me-sm-n2 {
    margin-right: -0.5rem !important;
  }
  .me-sm-n3 {
    margin-right: -1rem !important;
  }
  .me-sm-n4 {
    margin-right: -1.5rem !important;
  }
  .me-sm-n5 {
    margin-right: -3rem !important;
  }
  .mb-sm-n1 {
    margin-bottom: -0.25rem !important;
  }
  .mb-sm-n2 {
    margin-bottom: -0.5rem !important;
  }
  .mb-sm-n3 {
    margin-bottom: -1rem !important;
  }
  .mb-sm-n4 {
    margin-bottom: -1.5rem !important;
  }
  .mb-sm-n5 {
    margin-bottom: -3rem !important;
  }
  .ms-sm-n1 {
    margin-left: -0.25rem !important;
  }
  .ms-sm-n2 {
    margin-left: -0.5rem !important;
  }
  .ms-sm-n3 {
    margin-left: -1rem !important;
  }
  .ms-sm-n4 {
    margin-left: -1.5rem !important;
  }
  .ms-sm-n5 {
    margin-left: -3rem !important;
  }
  .p-sm-0 {
    padding: 0 !important;
  }
  .p-sm-1 {
    padding: 0.25rem !important;
  }
  .p-sm-2 {
    padding: 0.5rem !important;
  }
  .p-sm-3 {
    padding: 1rem !important;
  }
  .p-sm-4 {
    padding: 1.5rem !important;
  }
  .p-sm-5 {
    padding: 3rem !important;
  }
  .px-sm-0 {
    padding-right: 0 !important;
    padding-left: 0 !important;
  }
  .px-sm-1 {
    padding-right: 0.25rem !important;
    padding-left: 0.25rem !important;
  }
  .px-sm-2 {
    padding-right: 0.5rem !important;
    padding-left: 0.5rem !important;
  }
  .px-sm-3 {
    padding-right: 1rem !important;
    padding-left: 1rem !important;
  }
  .px-sm-4 {
    padding-right: 1.5rem !important;
    padding-left: 1.5rem !important;
  }
  .px-sm-5 {
    padding-right: 3rem !important;
    padding-left: 3rem !important;
  }
  .py-sm-0 {
    padding-top: 0 !important;
    padding-bottom: 0 !important;
  }
  .py-sm-1 {
    padding-top: 0.25rem !important;
    padding-bottom: 0.25rem !important;
  }
  .py-sm-2 {
    padding-top: 0.5rem !important;
    padding-bottom: 0.5rem !important;
  }
  .py-sm-3 {
    padding-top: 1rem !important;
    padding-bottom: 1rem !important;
  }
  .py-sm-4 {
    padding-top: 1.5rem !important;
    padding-bottom: 1.5rem !important;
  }
  .py-sm-5 {
    padding-top: 3rem !important;
    padding-bottom: 3rem !important;
  }
  .pt-sm-0 {
    padding-top: 0 !important;
  }
  .pt-sm-1 {
    padding-top: 0.25rem !important;
  }
  .pt-sm-2 {
    padding-top: 0.5rem !important;
  }
  .pt-sm-3 {
    padding-top: 1rem !important;
  }
  .pt-sm-4 {
    padding-top: 1.5rem !important;
  }
  .pt-sm-5 {
    padding-top: 3rem !important;
  }
  .pe-sm-0 {
    padding-right: 0 !important;
  }
  .pe-sm-1 {
    padding-right: 0.25rem !important;
  }
  .pe-sm-2 {
    padding-right: 0.5rem !important;
  }
  .pe-sm-3 {
    padding-right: 1rem !important;
  }
  .pe-sm-4 {
    padding-right: 1.5rem !important;
  }
  .pe-sm-5 {
    padding-right: 3rem !important;
  }
  .pb-sm-0 {
    padding-bottom: 0 !important;
  }
  .pb-sm-1 {
    padding-bottom: 0.25rem !important;
  }
  .pb-sm-2 {
    padding-bottom: 0.5rem !important;
  }
  .pb-sm-3 {
    padding-bottom: 1rem !important;
  }
  .pb-sm-4 {
    padding-bottom: 1.5rem !important;
  }
  .pb-sm-5 {
    padding-bottom: 3rem !important;
  }
  .ps-sm-0 {
    padding-left: 0 !important;
  }
  .ps-sm-1 {
    padding-left: 0.25rem !important;
  }
  .ps-sm-2 {
    padding-left: 0.5rem !important;
  }
  .ps-sm-3 {
    padding-left: 1rem !important;
  }
  .ps-sm-4 {
    padding-left: 1.5rem !important;
  }
  .ps-sm-5 {
    padding-left: 3rem !important;
  }
  .gap-sm-0 {
    gap: 0 !important;
  }
  .gap-sm-1 {
    gap: 0.25rem !important;
  }
  .gap-sm-2 {
    gap: 0.5rem !important;
  }
  .gap-sm-3 {
    gap: 1rem !important;
  }
  .gap-sm-4 {
    gap: 1.5rem !important;
  }
  .gap-sm-5 {
    gap: 3rem !important;
  }
  .text-sm-start {
    text-align: left !important;
  }
  .text-sm-end {
    text-align: right !important;
  }
  .text-sm-center {
    text-align: center !important;
  }
}
@media (min-width: 768px) {
  .float-md-start {
    float: left !important;
  }
  .float-md-end {
    float: right !important;
  }
  .float-md-none {
    float: none !important;
  }
  .d-md-inline {
    display: inline !important;
  }
  .d-md-inline-block {
    display: inline-block !important;
  }
  .d-md-block {
    display: block !important;
  }
  .d-md-grid {
    display: grid !important;
  }
  .d-md-table {
    display: table !important;
  }
  .d-md-table-row {
    display: table-row !important;
  }
  .d-md-table-cell {
    display: table-cell !important;
  }
  .d-md-flex {
    display: flex !important;
  }
  .d-md-inline-flex {
    display: inline-flex !important;
  }
  .d-md-none {
    display: none !important;
  }
  .flex-md-fill {
    flex: 1 1 auto !important;
  }
  .flex-md-row {
    flex-direction: row !important;
  }
  .flex-md-column {
    flex-direction: column !important;
  }
  .flex-md-row-reverse {
    flex-direction: row-reverse !important;
  }
  .flex-md-column-reverse {
    flex-direction: column-reverse !important;
  }
  .flex-md-grow-0 {
    flex-grow: 0 !important;
  }
  .flex-md-grow-1 {
    flex-grow: 1 !important;
  }
  .flex-md-shrink-0 {
    flex-shrink: 0 !important;
  }
  .flex-md-shrink-1 {
    flex-shrink: 1 !important;
  }
  .flex-md-wrap {
    flex-wrap: wrap !important;
  }
  .flex-md-nowrap {
    flex-wrap: nowrap !important;
  }
  .flex-md-wrap-reverse {
    flex-wrap: wrap-reverse !important;
  }
  .justify-content-md-start {
    justify-content: flex-start !important;
  }
  .justify-content-md-end {
    justify-content: flex-end !important;
  }
  .justify-content-md-center {
    justify-content: center !important;
  }
  .justify-content-md-between {
    justify-content: space-between !important;
  }
  .justify-content-md-around {
    justify-content: space-around !important;
  }
  .justify-content-md-evenly {
    justify-content: space-evenly !important;
  }
  .align-items-md-start {
    align-items: flex-start !important;
  }
  .align-items-md-end {
    align-items: flex-end !important;
  }
  .align-items-md-center {
    align-items: center !important;
  }
  .align-items-md-baseline {
    align-items: baseline !important;
  }
  .align-items-md-stretch {
    align-items: stretch !important;
  }
  .align-content-md-start {
    align-content: flex-start !important;
  }
  .align-content-md-end {
    align-content: flex-end !important;
  }
  .align-content-md-center {
    align-content: center !important;
  }
  .align-content-md-between {
    align-content: space-between !important;
  }
  .align-content-md-around {
    align-content: space-around !important;
  }
  .align-content-md-stretch {
    align-content: stretch !important;
  }
  .align-self-md-auto {
    align-self: auto !important;
  }
  .align-self-md-start {
    align-self: flex-start !important;
  }
  .align-self-md-end {
    align-self: flex-end !important;
  }
  .align-self-md-center {
    align-self: center !important;
  }
  .align-self-md-baseline {
    align-self: baseline !important;
  }
  .align-self-md-stretch {
    align-self: stretch !important;
  }
  .order-md-first {
    order: -1 !important;
  }
  .order-md-0 {
    order: 0 !important;
  }
  .order-md-1 {
    order: 1 !important;
  }
  .order-md-2 {
    order: 2 !important;
  }
  .order-md-3 {
    order: 3 !important;
  }
  .order-md-4 {
    order: 4 !important;
  }
  .order-md-5 {
    order: 5 !important;
  }
  .order-md-last {
    order: 6 !important;
  }
  .m-md-0 {
    margin: 0 !important;
  }
  .m-md-1 {
    margin: 0.25rem !important;
  }
  .m-md-2 {
    margin: 0.5rem !important;
  }
  .m-md-3 {
    margin: 1rem !important;
  }
  .m-md-4 {
    margin: 1.5rem !important;
  }
  .m-md-5 {
    margin: 3rem !important;
  }
  .m-md-auto {
    margin: auto !important;
  }
  .mx-md-0 {
    margin-right: 0 !important;
    margin-left: 0 !important;
  }
  .mx-md-1 {
    margin-right: 0.25rem !important;
    margin-left: 0.25rem !important;
  }
  .mx-md-2 {
    margin-right: 0.5rem !important;
    margin-left: 0.5rem !important;
  }
  .mx-md-3 {
    margin-right: 1rem !important;
    margin-left: 1rem !important;
  }
  .mx-md-4 {
    margin-right: 1.5rem !important;
    margin-left: 1.5rem !important;
  }
  .mx-md-5 {
    margin-right: 3rem !important;
    margin-left: 3rem !important;
  }
  .mx-md-auto {
    margin-right: auto !important;
    margin-left: auto !important;
  }
  .my-md-0 {
    margin-top: 0 !important;
    margin-bottom: 0 !important;
  }
  .my-md-1 {
    margin-top: 0.25rem !important;
    margin-bottom: 0.25rem !important;
  }
  .my-md-2 {
    margin-top: 0.5rem !important;
    margin-bottom: 0.5rem !important;
  }
  .my-md-3 {
    margin-top: 1rem !important;
    margin-bottom: 1rem !important;
  }
  .my-md-4 {
    margin-top: 1.5rem !important;
    margin-bottom: 1.5rem !important;
  }
  .my-md-5 {
    margin-top: 3rem !important;
    margin-bottom: 3rem !important;
  }
  .my-md-auto {
    margin-top: auto !important;
    margin-bottom: auto !important;
  }
  .mt-md-0 {
    margin-top: 0 !important;
  }
  .mt-md-1 {
    margin-top: 0.25rem !important;
  }
  .mt-md-2 {
    margin-top: 0.5rem !important;
  }
  .mt-md-3 {
    margin-top: 1rem !important;
  }
  .mt-md-4 {
    margin-top: 1.5rem !important;
  }
  .mt-md-5 {
    margin-top: 3rem !important;
  }
  .mt-md-auto {
    margin-top: auto !important;
  }
  .me-md-0 {
    margin-right: 0 !important;
  }
  .me-md-1 {
    margin-right: 0.25rem !important;
  }
  .me-md-2 {
    margin-right: 0.5rem !important;
  }
  .me-md-3 {
    margin-right: 1rem !important;
  }
  .me-md-4 {
    margin-right: 1.5rem !important;
  }
  .me-md-5 {
    margin-right: 3rem !important;
  }
  .me-md-auto {
    margin-right: auto !important;
  }
  .mb-md-0 {
    margin-bottom: 0 !important;
  }
  .mb-md-1 {
    margin-bottom: 0.25rem !important;
  }
  .mb-md-2 {
    margin-bottom: 0.5rem !important;
  }
  .mb-md-3 {
    margin-bottom: 1rem !important;
  }
  .mb-md-4 {
    margin-bottom: 1.5rem !important;
  }
  .mb-md-5 {
    margin-bottom: 3rem !important;
  }
  .mb-md-auto {
    margin-bottom: auto !important;
  }
  .mb-md-6 {
    margin-bottom: 3.5rem !important;
  }
  .mb-md-7 {
    margin-bottom: 4rem !important;
  }
  .mb-md-8 {
    margin-bottom: 5rem !important;
  }
  .mb-md-9 {
    margin-bottom: 6rem !important;
  }
  .mb-md-10 {
    margin-bottom: 8rem !important;
  }
  .mb-md-11 {
    margin-bottom: 10rem !important;
  }
  .mb-md-12 {
    margin-bottom: 12rem !important;
  }
  .mb-md-13 {
    margin-bottom: 14rem !important;
  }
  .mb-md-14 {
    margin-bottom: 16rem !important;
  }
  .ms-md-0 {
    margin-left: 0 !important;
  }
  .ms-md-1 {
    margin-left: 0.25rem !important;
  }
  .ms-md-2 {
    margin-left: 0.5rem !important;
  }
  .ms-md-3 {
    margin-left: 1rem !important;
  }
  .ms-md-4 {
    margin-left: 1.5rem !important;
  }
  .ms-md-5 {
    margin-left: 3rem !important;
  }
  .ms-md-auto {
    margin-left: auto !important;
  }
  .m-md-n1 {
    margin: -0.25rem !important;
  }
  .m-md-n2 {
    margin: -0.5rem !important;
  }
  .m-md-n3 {
    margin: -1rem !important;
  }
  .m-md-n4 {
    margin: -1.5rem !important;
  }
  .m-md-n5 {
    margin: -3rem !important;
  }
  .mx-md-n1 {
    margin-right: -0.25rem !important;
    margin-left: -0.25rem !important;
  }
  .mx-md-n2 {
    margin-right: -0.5rem !important;
    margin-left: -0.5rem !important;
  }
  .mx-md-n3 {
    margin-right: -1rem !important;
    margin-left: -1rem !important;
  }
  .mx-md-n4 {
    margin-right: -1.5rem !important;
    margin-left: -1.5rem !important;
  }
  .mx-md-n5 {
    margin-right: -3rem !important;
    margin-left: -3rem !important;
  }
  .my-md-n1 {
    margin-top: -0.25rem !important;
    margin-bottom: -0.25rem !important;
  }
  .my-md-n2 {
    margin-top: -0.5rem !important;
    margin-bottom: -0.5rem !important;
  }
  .my-md-n3 {
    margin-top: -1rem !important;
    margin-bottom: -1rem !important;
  }
  .my-md-n4 {
    margin-top: -1.5rem !important;
    margin-bottom: -1.5rem !important;
  }
  .my-md-n5 {
    margin-top: -3rem !important;
    margin-bottom: -3rem !important;
  }
  .mt-md-n1 {
    margin-top: -0.25rem !important;
  }
  .mt-md-n2 {
    margin-top: -0.5rem !important;
  }
  .mt-md-n3 {
    margin-top: -1rem !important;
  }
  .mt-md-n4 {
    margin-top: -1.5rem !important;
  }
  .mt-md-n5 {
    margin-top: -3rem !important;
  }
  .me-md-n1 {
    margin-right: -0.25rem !important;
  }
  .me-md-n2 {
    margin-right: -0.5rem !important;
  }
  .me-md-n3 {
    margin-right: -1rem !important;
  }
  .me-md-n4 {
    margin-right: -1.5rem !important;
  }
  .me-md-n5 {
    margin-right: -3rem !important;
  }
  .mb-md-n1 {
    margin-bottom: -0.25rem !important;
  }
  .mb-md-n2 {
    margin-bottom: -0.5rem !important;
  }
  .mb-md-n3 {
    margin-bottom: -1rem !important;
  }
  .mb-md-n4 {
    margin-bottom: -1.5rem !important;
  }
  .mb-md-n5 {
    margin-bottom: -3rem !important;
  }
  .ms-md-n1 {
    margin-left: -0.25rem !important;
  }
  .ms-md-n2 {
    margin-left: -0.5rem !important;
  }
  .ms-md-n3 {
    margin-left: -1rem !important;
  }
  .ms-md-n4 {
    margin-left: -1.5rem !important;
  }
  .ms-md-n5 {
    margin-left: -3rem !important;
  }
  .p-md-0 {
    padding: 0 !important;
  }
  .p-md-1 {
    padding: 0.25rem !important;
  }
  .p-md-2 {
    padding: 0.5rem !important;
  }
  .p-md-3 {
    padding: 1rem !important;
  }
  .p-md-4 {
    padding: 1.5rem !important;
  }
  .p-md-5 {
    padding: 3rem !important;
  }
  .px-md-0 {
    padding-right: 0 !important;
    padding-left: 0 !important;
  }
  .px-md-1 {
    padding-right: 0.25rem !important;
    padding-left: 0.25rem !important;
  }
  .px-md-2 {
    padding-right: 0.5rem !important;
    padding-left: 0.5rem !important;
  }
  .px-md-3 {
    padding-right: 1rem !important;
    padding-left: 1rem !important;
  }
  .px-md-4 {
    padding-right: 1.5rem !important;
    padding-left: 1.5rem !important;
  }
  .px-md-5 {
    padding-right: 3rem !important;
    padding-left: 3rem !important;
  }
  .py-md-0 {
    padding-top: 0 !important;
    padding-bottom: 0 !important;
  }
  .py-md-1 {
    padding-top: 0.25rem !important;
    padding-bottom: 0.25rem !important;
  }
  .py-md-2 {
    padding-top: 0.5rem !important;
    padding-bottom: 0.5rem !important;
  }
  .py-md-3 {
    padding-top: 1rem !important;
    padding-bottom: 1rem !important;
  }
  .py-md-4 {
    padding-top: 1.5rem !important;
    padding-bottom: 1.5rem !important;
  }
  .py-md-5 {
    padding-top: 3rem !important;
    padding-bottom: 3rem !important;
  }
  .pt-md-0 {
    padding-top: 0 !important;
  }
  .pt-md-1 {
    padding-top: 0.25rem !important;
  }
  .pt-md-2 {
    padding-top: 0.5rem !important;
  }
  .pt-md-3 {
    padding-top: 1rem !important;
  }
  .pt-md-4 {
    padding-top: 1.5rem !important;
  }
  .pt-md-5 {
    padding-top: 3rem !important;
  }
  .pe-md-0 {
    padding-right: 0 !important;
  }
  .pe-md-1 {
    padding-right: 0.25rem !important;
  }
  .pe-md-2 {
    padding-right: 0.5rem !important;
  }
  .pe-md-3 {
    padding-right: 1rem !important;
  }
  .pe-md-4 {
    padding-right: 1.5rem !important;
  }
  .pe-md-5 {
    padding-right: 3rem !important;
  }
  .pb-md-0 {
    padding-bottom: 0 !important;
  }
  .pb-md-1 {
    padding-bottom: 0.25rem !important;
  }
  .pb-md-2 {
    padding-bottom: 0.5rem !important;
  }
  .pb-md-3 {
    padding-bottom: 1rem !important;
  }
  .pb-md-4 {
    padding-bottom: 1.5rem !important;
  }
  .pb-md-5 {
    padding-bottom: 3rem !important;
  }
  .ps-md-0 {
    padding-left: 0 !important;
  }
  .ps-md-1 {
    padding-left: 0.25rem !important;
  }
  .ps-md-2 {
    padding-left: 0.5rem !important;
  }
  .ps-md-3 {
    padding-left: 1rem !important;
  }
  .ps-md-4 {
    padding-left: 1.5rem !important;
  }
  .ps-md-5 {
    padding-left: 3rem !important;
  }
  .gap-md-0 {
    gap: 0 !important;
  }
  .gap-md-1 {
    gap: 0.25rem !important;
  }
  .gap-md-2 {
    gap: 0.5rem !important;
  }
  .gap-md-3 {
    gap: 1rem !important;
  }
  .gap-md-4 {
    gap: 1.5rem !important;
  }
  .gap-md-5 {
    gap: 3rem !important;
  }
  .text-md-start {
    text-align: left !important;
  }
  .text-md-end {
    text-align: right !important;
  }
  .text-md-center {
    text-align: center !important;
  }
}
@media (min-width: 992px) {
  .float-lg-start {
    float: left !important;
  }
  .float-lg-end {
    float: right !important;
  }
  .float-lg-none {
    float: none !important;
  }
  .d-lg-inline {
    display: inline !important;
  }
  .d-lg-inline-block {
    display: inline-block !important;
  }
  .d-lg-block {
    display: block !important;
  }
  .d-lg-grid {
    display: grid !important;
  }
  .d-lg-table {
    display: table !important;
  }
  .d-lg-table-row {
    display: table-row !important;
  }
  .d-lg-table-cell {
    display: table-cell !important;
  }
  .d-lg-flex {
    display: flex !important;
  }
  .d-lg-inline-flex {
    display: inline-flex !important;
  }
  .d-lg-none {
    display: none !important;
  }
  .flex-lg-fill {
    flex: 1 1 auto !important;
  }
  .flex-lg-row {
    flex-direction: row !important;
  }
  .flex-lg-column {
    flex-direction: column !important;
  }
  .flex-lg-row-reverse {
    flex-direction: row-reverse !important;
  }
  .flex-lg-column-reverse {
    flex-direction: column-reverse !important;
  }
  .flex-lg-grow-0 {
    flex-grow: 0 !important;
  }
  .flex-lg-grow-1 {
    flex-grow: 1 !important;
  }
  .flex-lg-shrink-0 {
    flex-shrink: 0 !important;
  }
  .flex-lg-shrink-1 {
    flex-shrink: 1 !important;
  }
  .flex-lg-wrap {
    flex-wrap: wrap !important;
  }
  .flex-lg-nowrap {
    flex-wrap: nowrap !important;
  }
  .flex-lg-wrap-reverse {
    flex-wrap: wrap-reverse !important;
  }
  .justify-content-lg-start {
    justify-content: flex-start !important;
  }
  .justify-content-lg-end {
    justify-content: flex-end !important;
  }
  .justify-content-lg-center {
    justify-content: center !important;
  }
  .justify-content-lg-between {
    justify-content: space-between !important;
  }
  .justify-content-lg-around {
    justify-content: space-around !important;
  }
  .justify-content-lg-evenly {
    justify-content: space-evenly !important;
  }
  .align-items-lg-start {
    align-items: flex-start !important;
  }
  .align-items-lg-end {
    align-items: flex-end !important;
  }
  .align-items-lg-center {
    align-items: center !important;
  }
  .align-items-lg-baseline {
    align-items: baseline !important;
  }
  .align-items-lg-stretch {
    align-items: stretch !important;
  }
  .align-content-lg-start {
    align-content: flex-start !important;
  }
  .align-content-lg-end {
    align-content: flex-end !important;
  }
  .align-content-lg-center {
    align-content: center !important;
  }
  .align-content-lg-between {
    align-content: space-between !important;
  }
  .align-content-lg-around {
    align-content: space-around !important;
  }
  .align-content-lg-stretch {
    align-content: stretch !important;
  }
  .align-self-lg-auto {
    align-self: auto !important;
  }
  .align-self-lg-start {
    align-self: flex-start !important;
  }
  .align-self-lg-end {
    align-self: flex-end !important;
  }
  .align-self-lg-center {
    align-self: center !important;
  }
  .align-self-lg-baseline {
    align-self: baseline !important;
  }
  .align-self-lg-stretch {
    align-self: stretch !important;
  }
  .order-lg-first {
    order: -1 !important;
  }
  .order-lg-0 {
    order: 0 !important;
  }
  .order-lg-1 {
    order: 1 !important;
  }
  .order-lg-2 {
    order: 2 !important;
  }
  .order-lg-3 {
    order: 3 !important;
  }
  .order-lg-4 {
    order: 4 !important;
  }
  .order-lg-5 {
    order: 5 !important;
  }
  .order-lg-last {
    order: 6 !important;
  }
  .m-lg-0 {
    margin: 0 !important;
  }
  .m-lg-1 {
    margin: 0.25rem !important;
  }
  .m-lg-2 {
    margin: 0.5rem !important;
  }
  .m-lg-3 {
    margin: 1rem !important;
  }
  .m-lg-4 {
    margin: 1.5rem !important;
  }
  .m-lg-5 {
    margin: 3rem !important;
  }
  .m-lg-auto {
    margin: auto !important;
  }
  .mx-lg-0 {
    margin-right: 0 !important;
    margin-left: 0 !important;
  }
  .mx-lg-1 {
    margin-right: 0.25rem !important;
    margin-left: 0.25rem !important;
  }
  .mx-lg-2 {
    margin-right: 0.5rem !important;
    margin-left: 0.5rem !important;
  }
  .mx-lg-3 {
    margin-right: 1rem !important;
    margin-left: 1rem !important;
  }
  .mx-lg-4 {
    margin-right: 1.5rem !important;
    margin-left: 1.5rem !important;
  }
  .mx-lg-5 {
    margin-right: 3rem !important;
    margin-left: 3rem !important;
  }
  .mx-lg-auto {
    margin-right: auto !important;
    margin-left: auto !important;
  }
  .my-lg-0 {
    margin-top: 0 !important;
    margin-bottom: 0 !important;
  }
  .my-lg-1 {
    margin-top: 0.25rem !important;
    margin-bottom: 0.25rem !important;
  }
  .my-lg-2 {
    margin-top: 0.5rem !important;
    margin-bottom: 0.5rem !important;
  }
  .my-lg-3 {
    margin-top: 1rem !important;
    margin-bottom: 1rem !important;
  }
  .my-lg-4 {
    margin-top: 1.5rem !important;
    margin-bottom: 1.5rem !important;
  }
  .my-lg-5 {
    margin-top: 3rem !important;
    margin-bottom: 3rem !important;
  }
  .my-lg-auto {
    margin-top: auto !important;
    margin-bottom: auto !important;
  }
  .mt-lg-0 {
    margin-top: 0 !important;
  }
  .mt-lg-1 {
    margin-top: 0.25rem !important;
  }
  .mt-lg-2 {
    margin-top: 0.5rem !important;
  }
  .mt-lg-3 {
    margin-top: 1rem !important;
  }
  .mt-lg-4 {
    margin-top: 1.5rem !important;
  }
  .mt-lg-5 {
    margin-top: 3rem !important;
  }
  .mt-lg-auto {
    margin-top: auto !important;
  }
  .me-lg-0 {
    margin-right: 0 !important;
  }
  .me-lg-1 {
    margin-right: 0.25rem !important;
  }
  .me-lg-2 {
    margin-right: 0.5rem !important;
  }
  .me-lg-3 {
    margin-right: 1rem !important;
  }
  .me-lg-4 {
    margin-right: 1.5rem !important;
  }
  .me-lg-5 {
    margin-right: 3rem !important;
  }
  .me-lg-auto {
    margin-right: auto !important;
  }
  .mb-lg-0 {
    margin-bottom: 0 !important;
  }
  .mb-lg-1 {
    margin-bottom: 0.25rem !important;
  }
  .mb-lg-2 {
    margin-bottom: 0.5rem !important;
  }
  .mb-lg-3 {
    margin-bottom: 1rem !important;
  }
  .mb-lg-4 {
    margin-bottom: 1.5rem !important;
  }
  .mb-lg-5 {
    margin-bottom: 3rem !important;
  }
  .mb-lg-auto {
    margin-bottom: auto !important;
  }
  .mb-lg-6 {
    margin-bottom: 3.5rem !important;
  }
  .mb-lg-7 {
    margin-bottom: 4rem !important;
  }
  .mb-lg-8 {
    margin-bottom: 5rem !important;
  }
  .mb-lg-9 {
    margin-bottom: 6rem !important;
  }
  .mb-lg-10 {
    margin-bottom: 8rem !important;
  }
  .mb-lg-11 {
    margin-bottom: 10rem !important;
  }
  .mb-lg-12 {
    margin-bottom: 12rem !important;
  }
  .mb-lg-13 {
    margin-bottom: 14rem !important;
  }
  .mb-lg-14 {
    margin-bottom: 16rem !important;
  }
  .ms-lg-0 {
    margin-left: 0 !important;
  }
  .ms-lg-1 {
    margin-left: 0.25rem !important;
  }
  .ms-lg-2 {
    margin-left: 0.5rem !important;
  }
  .ms-lg-3 {
    margin-left: 1rem !important;
  }
  .ms-lg-4 {
    margin-left: 1.5rem !important;
  }
  .ms-lg-5 {
    margin-left: 3rem !important;
  }
  .ms-lg-auto {
    margin-left: auto !important;
  }
  .m-lg-n1 {
    margin: -0.25rem !important;
  }
  .m-lg-n2 {
    margin: -0.5rem !important;
  }
  .m-lg-n3 {
    margin: -1rem !important;
  }
  .m-lg-n4 {
    margin: -1.5rem !important;
  }
  .m-lg-n5 {
    margin: -3rem !important;
  }
  .mx-lg-n1 {
    margin-right: -0.25rem !important;
    margin-left: -0.25rem !important;
  }
  .mx-lg-n2 {
    margin-right: -0.5rem !important;
    margin-left: -0.5rem !important;
  }
  .mx-lg-n3 {
    margin-right: -1rem !important;
    margin-left: -1rem !important;
  }
  .mx-lg-n4 {
    margin-right: -1.5rem !important;
    margin-left: -1.5rem !important;
  }
  .mx-lg-n5 {
    margin-right: -3rem !important;
    margin-left: -3rem !important;
  }
  .my-lg-n1 {
    margin-top: -0.25rem !important;
    margin-bottom: -0.25rem !important;
  }
  .my-lg-n2 {
    margin-top: -0.5rem !important;
    margin-bottom: -0.5rem !important;
  }
  .my-lg-n3 {
    margin-top: -1rem !important;
    margin-bottom: -1rem !important;
  }
  .my-lg-n4 {
    margin-top: -1.5rem !important;
    margin-bottom: -1.5rem !important;
  }
  .my-lg-n5 {
    margin-top: -3rem !important;
    margin-bottom: -3rem !important;
  }
  .mt-lg-n1 {
    margin-top: -0.25rem !important;
  }
  .mt-lg-n2 {
    margin-top: -0.5rem !important;
  }
  .mt-lg-n3 {
    margin-top: -1rem !important;
  }
  .mt-lg-n4 {
    margin-top: -1.5rem !important;
  }
  .mt-lg-n5 {
    margin-top: -3rem !important;
  }
  .me-lg-n1 {
    margin-right: -0.25rem !important;
  }
  .me-lg-n2 {
    margin-right: -0.5rem !important;
  }
  .me-lg-n3 {
    margin-right: -1rem !important;
  }
  .me-lg-n4 {
    margin-right: -1.5rem !important;
  }
  .me-lg-n5 {
    margin-right: -3rem !important;
  }
  .mb-lg-n1 {
    margin-bottom: -0.25rem !important;
  }
  .mb-lg-n2 {
    margin-bottom: -0.5rem !important;
  }
  .mb-lg-n3 {
    margin-bottom: -1rem !important;
  }
  .mb-lg-n4 {
    margin-bottom: -1.5rem !important;
  }
  .mb-lg-n5 {
    margin-bottom: -3rem !important;
  }
  .ms-lg-n1 {
    margin-left: -0.25rem !important;
  }
  .ms-lg-n2 {
    margin-left: -0.5rem !important;
  }
  .ms-lg-n3 {
    margin-left: -1rem !important;
  }
  .ms-lg-n4 {
    margin-left: -1.5rem !important;
  }
  .ms-lg-n5 {
    margin-left: -3rem !important;
  }
  .p-lg-0 {
    padding: 0 !important;
  }
  .p-lg-1 {
    padding: 0.25rem !important;
  }
  .p-lg-2 {
    padding: 0.5rem !important;
  }
  .p-lg-3 {
    padding: 1rem !important;
  }
  .p-lg-4 {
    padding: 1.5rem !important;
  }
  .p-lg-5 {
    padding: 3rem !important;
  }
  .px-lg-0 {
    padding-right: 0 !important;
    padding-left: 0 !important;
  }
  .px-lg-1 {
    padding-right: 0.25rem !important;
    padding-left: 0.25rem !important;
  }
  .px-lg-2 {
    padding-right: 0.5rem !important;
    padding-left: 0.5rem !important;
  }
  .px-lg-3 {
    padding-right: 1rem !important;
    padding-left: 1rem !important;
  }
  .px-lg-4 {
    padding-right: 1.5rem !important;
    padding-left: 1.5rem !important;
  }
  .px-lg-5 {
    padding-right: 3rem !important;
    padding-left: 3rem !important;
  }
  .py-lg-0 {
    padding-top: 0 !important;
    padding-bottom: 0 !important;
  }
  .py-lg-1 {
    padding-top: 0.25rem !important;
    padding-bottom: 0.25rem !important;
  }
  .py-lg-2 {
    padding-top: 0.5rem !important;
    padding-bottom: 0.5rem !important;
  }
  .py-lg-3 {
    padding-top: 1rem !important;
    padding-bottom: 1rem !important;
  }
  .py-lg-4 {
    padding-top: 1.5rem !important;
    padding-bottom: 1.5rem !important;
  }
  .py-lg-5 {
    padding-top: 3rem !important;
    padding-bottom: 3rem !important;
  }
  .pt-lg-0 {
    padding-top: 0 !important;
  }
  .pt-lg-1 {
    padding-top: 0.25rem !important;
  }
  .pt-lg-2 {
    padding-top: 0.5rem !important;
  }
  .pt-lg-3 {
    padding-top: 1rem !important;
  }
  .pt-lg-4 {
    padding-top: 1.5rem !important;
  }
  .pt-lg-5 {
    padding-top: 3rem !important;
  }
  .pe-lg-0 {
    padding-right: 0 !important;
  }
  .pe-lg-1 {
    padding-right: 0.25rem !important;
  }
  .pe-lg-2 {
    padding-right: 0.5rem !important;
  }
  .pe-lg-3 {
    padding-right: 1rem !important;
  }
  .pe-lg-4 {
    padding-right: 1.5rem !important;
  }
  .pe-lg-5 {
    padding-right: 3rem !important;
  }
  .pb-lg-0 {
    padding-bottom: 0 !important;
  }
  .pb-lg-1 {
    padding-bottom: 0.25rem !important;
  }
  .pb-lg-2 {
    padding-bottom: 0.5rem !important;
  }
  .pb-lg-3 {
    padding-bottom: 1rem !important;
  }
  .pb-lg-4 {
    padding-bottom: 1.5rem !important;
  }
  .pb-lg-5 {
    padding-bottom: 3rem !important;
  }
  .ps-lg-0 {
    padding-left: 0 !important;
  }
  .ps-lg-1 {
    padding-left: 0.25rem !important;
  }
  .ps-lg-2 {
    padding-left: 0.5rem !important;
  }
  .ps-lg-3 {
    padding-left: 1rem !important;
  }
  .ps-lg-4 {
    padding-left: 1.5rem !important;
  }
  .ps-lg-5 {
    padding-left: 3rem !important;
  }
  .gap-lg-0 {
    gap: 0 !important;
  }
  .gap-lg-1 {
    gap: 0.25rem !important;
  }
  .gap-lg-2 {
    gap: 0.5rem !important;
  }
  .gap-lg-3 {
    gap: 1rem !important;
  }
  .gap-lg-4 {
    gap: 1.5rem !important;
  }
  .gap-lg-5 {
    gap: 3rem !important;
  }
  .text-lg-start {
    text-align: left !important;
  }
  .text-lg-end {
    text-align: right !important;
  }
  .text-lg-center {
    text-align: center !important;
  }
}
@media (min-width: 1200px) {
  .float-xl-start {
    float: left !important;
  }
  .float-xl-end {
    float: right !important;
  }
  .float-xl-none {
    float: none !important;
  }
  .d-xl-inline {
    display: inline !important;
  }
  .d-xl-inline-block {
    display: inline-block !important;
  }
  .d-xl-block {
    display: block !important;
  }
  .d-xl-grid {
    display: grid !important;
  }
  .d-xl-table {
    display: table !important;
  }
  .d-xl-table-row {
    display: table-row !important;
  }
  .d-xl-table-cell {
    display: table-cell !important;
  }
  .d-xl-flex {
    display: flex !important;
  }
  .d-xl-inline-flex {
    display: inline-flex !important;
  }
  .d-xl-none {
    display: none !important;
  }
  .flex-xl-fill {
    flex: 1 1 auto !important;
  }
  .flex-xl-row {
    flex-direction: row !important;
  }
  .flex-xl-column {
    flex-direction: column !important;
  }
  .flex-xl-row-reverse {
    flex-direction: row-reverse !important;
  }
  .flex-xl-column-reverse {
    flex-direction: column-reverse !important;
  }
  .flex-xl-grow-0 {
    flex-grow: 0 !important;
  }
  .flex-xl-grow-1 {
    flex-grow: 1 !important;
  }
  .flex-xl-shrink-0 {
    flex-shrink: 0 !important;
  }
  .flex-xl-shrink-1 {
    flex-shrink: 1 !important;
  }
  .flex-xl-wrap {
    flex-wrap: wrap !important;
  }
  .flex-xl-nowrap {
    flex-wrap: nowrap !important;
  }
  .flex-xl-wrap-reverse {
    flex-wrap: wrap-reverse !important;
  }
  .justify-content-xl-start {
    justify-content: flex-start !important;
  }
  .justify-content-xl-end {
    justify-content: flex-end !important;
  }
  .justify-content-xl-center {
    justify-content: center !important;
  }
  .justify-content-xl-between {
    justify-content: space-between !important;
  }
  .justify-content-xl-around {
    justify-content: space-around !important;
  }
  .justify-content-xl-evenly {
    justify-content: space-evenly !important;
  }
  .align-items-xl-start {
    align-items: flex-start !important;
  }
  .align-items-xl-end {
    align-items: flex-end !important;
  }
  .align-items-xl-center {
    align-items: center !important;
  }
  .align-items-xl-baseline {
    align-items: baseline !important;
  }
  .align-items-xl-stretch {
    align-items: stretch !important;
  }
  .align-content-xl-start {
    align-content: flex-start !important;
  }
  .align-content-xl-end {
    align-content: flex-end !important;
  }
  .align-content-xl-center {
    align-content: center !important;
  }
  .align-content-xl-between {
    align-content: space-between !important;
  }
  .align-content-xl-around {
    align-content: space-around !important;
  }
  .align-content-xl-stretch {
    align-content: stretch !important;
  }
  .align-self-xl-auto {
    align-self: auto !important;
  }
  .align-self-xl-start {
    align-self: flex-start !important;
  }
  .align-self-xl-end {
    align-self: flex-end !important;
  }
  .align-self-xl-center {
    align-self: center !important;
  }
  .align-self-xl-baseline {
    align-self: baseline !important;
  }
  .align-self-xl-stretch {
    align-self: stretch !important;
  }
  .order-xl-first {
    order: -1 !important;
  }
  .order-xl-0 {
    order: 0 !important;
  }
  .order-xl-1 {
    order: 1 !important;
  }
  .order-xl-2 {
    order: 2 !important;
  }
  .order-xl-3 {
    order: 3 !important;
  }
  .order-xl-4 {
    order: 4 !important;
  }
  .order-xl-5 {
    order: 5 !important;
  }
  .order-xl-last {
    order: 6 !important;
  }
  .m-xl-0 {
    margin: 0 !important;
  }
  .m-xl-1 {
    margin: 0.25rem !important;
  }
  .m-xl-2 {
    margin: 0.5rem !important;
  }
  .m-xl-3 {
    margin: 1rem !important;
  }
  .m-xl-4 {
    margin: 1.5rem !important;
  }
  .m-xl-5 {
    margin: 3rem !important;
  }
  .m-xl-auto {
    margin: auto !important;
  }
  .mx-xl-0 {
    margin-right: 0 !important;
    margin-left: 0 !important;
  }
  .mx-xl-1 {
    margin-right: 0.25rem !important;
    margin-left: 0.25rem !important;
  }
  .mx-xl-2 {
    margin-right: 0.5rem !important;
    margin-left: 0.5rem !important;
  }
  .mx-xl-3 {
    margin-right: 1rem !important;
    margin-left: 1rem !important;
  }
  .mx-xl-4 {
    margin-right: 1.5rem !important;
    margin-left: 1.5rem !important;
  }
  .mx-xl-5 {
    margin-right: 3rem !important;
    margin-left: 3rem !important;
  }
  .mx-xl-auto {
    margin-right: auto !important;
    margin-left: auto !important;
  }
  .my-xl-0 {
    margin-top: 0 !important;
    margin-bottom: 0 !important;
  }
  .my-xl-1 {
    margin-top: 0.25rem !important;
    margin-bottom: 0.25rem !important;
  }
  .my-xl-2 {
    margin-top: 0.5rem !important;
    margin-bottom: 0.5rem !important;
  }
  .my-xl-3 {
    margin-top: 1rem !important;
    margin-bottom: 1rem !important;
  }
  .my-xl-4 {
    margin-top: 1.5rem !important;
    margin-bottom: 1.5rem !important;
  }
  .my-xl-5 {
    margin-top: 3rem !important;
    margin-bottom: 3rem !important;
  }
  .my-xl-auto {
    margin-top: auto !important;
    margin-bottom: auto !important;
  }
  .mt-xl-0 {
    margin-top: 0 !important;
  }
  .mt-xl-1 {
    margin-top: 0.25rem !important;
  }
  .mt-xl-2 {
    margin-top: 0.5rem !important;
  }
  .mt-xl-3 {
    margin-top: 1rem !important;
  }
  .mt-xl-4 {
    margin-top: 1.5rem !important;
  }
  .mt-xl-5 {
    margin-top: 3rem !important;
  }
  .mt-xl-auto {
    margin-top: auto !important;
  }
  .me-xl-0 {
    margin-right: 0 !important;
  }
  .me-xl-1 {
    margin-right: 0.25rem !important;
  }
  .me-xl-2 {
    margin-right: 0.5rem !important;
  }
  .me-xl-3 {
    margin-right: 1rem !important;
  }
  .me-xl-4 {
    margin-right: 1.5rem !important;
  }
  .me-xl-5 {
    margin-right: 3rem !important;
  }
  .me-xl-auto {
    margin-right: auto !important;
  }
  .mb-xl-0 {
    margin-bottom: 0 !important;
  }
  .mb-xl-1 {
    margin-bottom: 0.25rem !important;
  }
  .mb-xl-2 {
    margin-bottom: 0.5rem !important;
  }
  .mb-xl-3 {
    margin-bottom: 1rem !important;
  }
  .mb-xl-4 {
    margin-bottom: 1.5rem !important;
  }
  .mb-xl-5 {
    margin-bottom: 3rem !important;
  }
  .mb-xl-auto {
    margin-bottom: auto !important;
  }
  .mb-xl-6 {
    margin-bottom: 3.5rem !important;
  }
  .mb-xl-7 {
    margin-bottom: 4rem !important;
  }
  .mb-xl-8 {
    margin-bottom: 5rem !important;
  }
  .mb-xl-9 {
    margin-bottom: 6rem !important;
  }
  .mb-xl-10 {
    margin-bottom: 8rem !important;
  }
  .mb-xl-11 {
    margin-bottom: 10rem !important;
  }
  .mb-xl-12 {
    margin-bottom: 12rem !important;
  }
  .mb-xl-13 {
    margin-bottom: 14rem !important;
  }
  .mb-xl-14 {
    margin-bottom: 16rem !important;
  }
  .ms-xl-0 {
    margin-left: 0 !important;
  }
  .ms-xl-1 {
    margin-left: 0.25rem !important;
  }
  .ms-xl-2 {
    margin-left: 0.5rem !important;
  }
  .ms-xl-3 {
    margin-left: 1rem !important;
  }
  .ms-xl-4 {
    margin-left: 1.5rem !important;
  }
  .ms-xl-5 {
    margin-left: 3rem !important;
  }
  .ms-xl-auto {
    margin-left: auto !important;
  }
  .m-xl-n1 {
    margin: -0.25rem !important;
  }
  .m-xl-n2 {
    margin: -0.5rem !important;
  }
  .m-xl-n3 {
    margin: -1rem !important;
  }
  .m-xl-n4 {
    margin: -1.5rem !important;
  }
  .m-xl-n5 {
    margin: -3rem !important;
  }
  .mx-xl-n1 {
    margin-right: -0.25rem !important;
    margin-left: -0.25rem !important;
  }
  .mx-xl-n2 {
    margin-right: -0.5rem !important;
    margin-left: -0.5rem !important;
  }
  .mx-xl-n3 {
    margin-right: -1rem !important;
    margin-left: -1rem !important;
  }
  .mx-xl-n4 {
    margin-right: -1.5rem !important;
    margin-left: -1.5rem !important;
  }
  .mx-xl-n5 {
    margin-right: -3rem !important;
    margin-left: -3rem !important;
  }
  .my-xl-n1 {
    margin-top: -0.25rem !important;
    margin-bottom: -0.25rem !important;
  }
  .my-xl-n2 {
    margin-top: -0.5rem !important;
    margin-bottom: -0.5rem !important;
  }
  .my-xl-n3 {
    margin-top: -1rem !important;
    margin-bottom: -1rem !important;
  }
  .my-xl-n4 {
    margin-top: -1.5rem !important;
    margin-bottom: -1.5rem !important;
  }
  .my-xl-n5 {
    margin-top: -3rem !important;
    margin-bottom: -3rem !important;
  }
  .mt-xl-n1 {
    margin-top: -0.25rem !important;
  }
  .mt-xl-n2 {
    margin-top: -0.5rem !important;
  }
  .mt-xl-n3 {
    margin-top: -1rem !important;
  }
  .mt-xl-n4 {
    margin-top: -1.5rem !important;
  }
  .mt-xl-n5 {
    margin-top: -3rem !important;
  }
  .me-xl-n1 {
    margin-right: -0.25rem !important;
  }
  .me-xl-n2 {
    margin-right: -0.5rem !important;
  }
  .me-xl-n3 {
    margin-right: -1rem !important;
  }
  .me-xl-n4 {
    margin-right: -1.5rem !important;
  }
  .me-xl-n5 {
    margin-right: -3rem !important;
  }
  .mb-xl-n1 {
    margin-bottom: -0.25rem !important;
  }
  .mb-xl-n2 {
    margin-bottom: -0.5rem !important;
  }
  .mb-xl-n3 {
    margin-bottom: -1rem !important;
  }
  .mb-xl-n4 {
    margin-bottom: -1.5rem !important;
  }
  .mb-xl-n5 {
    margin-bottom: -3rem !important;
  }
  .ms-xl-n1 {
    margin-left: -0.25rem !important;
  }
  .ms-xl-n2 {
    margin-left: -0.5rem !important;
  }
  .ms-xl-n3 {
    margin-left: -1rem !important;
  }
  .ms-xl-n4 {
    margin-left: -1.5rem !important;
  }
  .ms-xl-n5 {
    margin-left: -3rem !important;
  }
  .p-xl-0 {
    padding: 0 !important;
  }
  .p-xl-1 {
    padding: 0.25rem !important;
  }
  .p-xl-2 {
    padding: 0.5rem !important;
  }
  .p-xl-3 {
    padding: 1rem !important;
  }
  .p-xl-4 {
    padding: 1.5rem !important;
  }
  .p-xl-5 {
    padding: 3rem !important;
  }
  .px-xl-0 {
    padding-right: 0 !important;
    padding-left: 0 !important;
  }
  .px-xl-1 {
    padding-right: 0.25rem !important;
    padding-left: 0.25rem !important;
  }
  .px-xl-2 {
    padding-right: 0.5rem !important;
    padding-left: 0.5rem !important;
  }
  .px-xl-3 {
    padding-right: 1rem !important;
    padding-left: 1rem !important;
  }
  .px-xl-4 {
    padding-right: 1.5rem !important;
    padding-left: 1.5rem !important;
  }
  .px-xl-5 {
    padding-right: 3rem !important;
    padding-left: 3rem !important;
  }
  .py-xl-0 {
    padding-top: 0 !important;
    padding-bottom: 0 !important;
  }
  .py-xl-1 {
    padding-top: 0.25rem !important;
    padding-bottom: 0.25rem !important;
  }
  .py-xl-2 {
    padding-top: 0.5rem !important;
    padding-bottom: 0.5rem !important;
  }
  .py-xl-3 {
    padding-top: 1rem !important;
    padding-bottom: 1rem !important;
  }
  .py-xl-4 {
    padding-top: 1.5rem !important;
    padding-bottom: 1.5rem !important;
  }
  .py-xl-5 {
    padding-top: 3rem !important;
    padding-bottom: 3rem !important;
  }
  .pt-xl-0 {
    padding-top: 0 !important;
  }
  .pt-xl-1 {
    padding-top: 0.25rem !important;
  }
  .pt-xl-2 {
    padding-top: 0.5rem !important;
  }
  .pt-xl-3 {
    padding-top: 1rem !important;
  }
  .pt-xl-4 {
    padding-top: 1.5rem !important;
  }
  .pt-xl-5 {
    padding-top: 3rem !important;
  }
  .pe-xl-0 {
    padding-right: 0 !important;
  }
  .pe-xl-1 {
    padding-right: 0.25rem !important;
  }
  .pe-xl-2 {
    padding-right: 0.5rem !important;
  }
  .pe-xl-3 {
    padding-right: 1rem !important;
  }
  .pe-xl-4 {
    padding-right: 1.5rem !important;
  }
  .pe-xl-5 {
    padding-right: 3rem !important;
  }
  .pb-xl-0 {
    padding-bottom: 0 !important;
  }
  .pb-xl-1 {
    padding-bottom: 0.25rem !important;
  }
  .pb-xl-2 {
    padding-bottom: 0.5rem !important;
  }
  .pb-xl-3 {
    padding-bottom: 1rem !important;
  }
  .pb-xl-4 {
    padding-bottom: 1.5rem !important;
  }
  .pb-xl-5 {
    padding-bottom: 3rem !important;
  }
  .ps-xl-0 {
    padding-left: 0 !important;
  }
  .ps-xl-1 {
    padding-left: 0.25rem !important;
  }
  .ps-xl-2 {
    padding-left: 0.5rem !important;
  }
  .ps-xl-3 {
    padding-left: 1rem !important;
  }
  .ps-xl-4 {
    padding-left: 1.5rem !important;
  }
  .ps-xl-5 {
    padding-left: 3rem !important;
  }
  .gap-xl-0 {
    gap: 0 !important;
  }
  .gap-xl-1 {
    gap: 0.25rem !important;
  }
  .gap-xl-2 {
    gap: 0.5rem !important;
  }
  .gap-xl-3 {
    gap: 1rem !important;
  }
  .gap-xl-4 {
    gap: 1.5rem !important;
  }
  .gap-xl-5 {
    gap: 3rem !important;
  }
  .text-xl-start {
    text-align: left !important;
  }
  .text-xl-end {
    text-align: right !important;
  }
  .text-xl-center {
    text-align: center !important;
  }
}
@media (min-width: 1400px) {
  .float-xxl-start {
    float: left !important;
  }
  .float-xxl-end {
    float: right !important;
  }
  .float-xxl-none {
    float: none !important;
  }
  .d-xxl-inline {
    display: inline !important;
  }
  .d-xxl-inline-block {
    display: inline-block !important;
  }
  .d-xxl-block {
    display: block !important;
  }
  .d-xxl-grid {
    display: grid !important;
  }
  .d-xxl-table {
    display: table !important;
  }
  .d-xxl-table-row {
    display: table-row !important;
  }
  .d-xxl-table-cell {
    display: table-cell !important;
  }
  .d-xxl-flex {
    display: flex !important;
  }
  .d-xxl-inline-flex {
    display: inline-flex !important;
  }
  .d-xxl-none {
    display: none !important;
  }
  .flex-xxl-fill {
    flex: 1 1 auto !important;
  }
  .flex-xxl-row {
    flex-direction: row !important;
  }
  .flex-xxl-column {
    flex-direction: column !important;
  }
  .flex-xxl-row-reverse {
    flex-direction: row-reverse !important;
  }
  .flex-xxl-column-reverse {
    flex-direction: column-reverse !important;
  }
  .flex-xxl-grow-0 {
    flex-grow: 0 !important;
  }
  .flex-xxl-grow-1 {
    flex-grow: 1 !important;
  }
  .flex-xxl-shrink-0 {
    flex-shrink: 0 !important;
  }
  .flex-xxl-shrink-1 {
    flex-shrink: 1 !important;
  }
  .flex-xxl-wrap {
    flex-wrap: wrap !important;
  }
  .flex-xxl-nowrap {
    flex-wrap: nowrap !important;
  }
  .flex-xxl-wrap-reverse {
    flex-wrap: wrap-reverse !important;
  }
  .justify-content-xxl-start {
    justify-content: flex-start !important;
  }
  .justify-content-xxl-end {
    justify-content: flex-end !important;
  }
  .justify-content-xxl-center {
    justify-content: center !important;
  }
  .justify-content-xxl-between {
    justify-content: space-between !important;
  }
  .justify-content-xxl-around {
    justify-content: space-around !important;
  }
  .justify-content-xxl-evenly {
    justify-content: space-evenly !important;
  }
  .align-items-xxl-start {
    align-items: flex-start !important;
  }
  .align-items-xxl-end {
    align-items: flex-end !important;
  }
  .align-items-xxl-center {
    align-items: center !important;
  }
  .align-items-xxl-baseline {
    align-items: baseline !important;
  }
  .align-items-xxl-stretch {
    align-items: stretch !important;
  }
  .align-content-xxl-start {
    align-content: flex-start !important;
  }
  .align-content-xxl-end {
    align-content: flex-end !important;
  }
  .align-content-xxl-center {
    align-content: center !important;
  }
  .align-content-xxl-between {
    align-content: space-between !important;
  }
  .align-content-xxl-around {
    align-content: space-around !important;
  }
  .align-content-xxl-stretch {
    align-content: stretch !important;
  }
  .align-self-xxl-auto {
    align-self: auto !important;
  }
  .align-self-xxl-start {
    align-self: flex-start !important;
  }
  .align-self-xxl-end {
    align-self: flex-end !important;
  }
  .align-self-xxl-center {
    align-self: center !important;
  }
  .align-self-xxl-baseline {
    align-self: baseline !important;
  }
  .align-self-xxl-stretch {
    align-self: stretch !important;
  }
  .order-xxl-first {
    order: -1 !important;
  }
  .order-xxl-0 {
    order: 0 !important;
  }
  .order-xxl-1 {
    order: 1 !important;
  }
  .order-xxl-2 {
    order: 2 !important;
  }
  .order-xxl-3 {
    order: 3 !important;
  }
  .order-xxl-4 {
    order: 4 !important;
  }
  .order-xxl-5 {
    order: 5 !important;
  }
  .order-xxl-last {
    order: 6 !important;
  }
  .m-xxl-0 {
    margin: 0 !important;
  }
  .m-xxl-1 {
    margin: 0.25rem !important;
  }
  .m-xxl-2 {
    margin: 0.5rem !important;
  }
  .m-xxl-3 {
    margin: 1rem !important;
  }
  .m-xxl-4 {
    margin: 1.5rem !important;
  }
  .m-xxl-5 {
    margin: 3rem !important;
  }
  .m-xxl-auto {
    margin: auto !important;
  }
  .mx-xxl-0 {
    margin-right: 0 !important;
    margin-left: 0 !important;
  }
  .mx-xxl-1 {
    margin-right: 0.25rem !important;
    margin-left: 0.25rem !important;
  }
  .mx-xxl-2 {
    margin-right: 0.5rem !important;
    margin-left: 0.5rem !important;
  }
  .mx-xxl-3 {
    margin-right: 1rem !important;
    margin-left: 1rem !important;
  }
  .mx-xxl-4 {
    margin-right: 1.5rem !important;
    margin-left: 1.5rem !important;
  }
  .mx-xxl-5 {
    margin-right: 3rem !important;
    margin-left: 3rem !important;
  }
  .mx-xxl-auto {
    margin-right: auto !important;
    margin-left: auto !important;
  }
  .my-xxl-0 {
    margin-top: 0 !important;
    margin-bottom: 0 !important;
  }
  .my-xxl-1 {
    margin-top: 0.25rem !important;
    margin-bottom: 0.25rem !important;
  }
  .my-xxl-2 {
    margin-top: 0.5rem !important;
    margin-bottom: 0.5rem !important;
  }
  .my-xxl-3 {
    margin-top: 1rem !important;
    margin-bottom: 1rem !important;
  }
  .my-xxl-4 {
    margin-top: 1.5rem !important;
    margin-bottom: 1.5rem !important;
  }
  .my-xxl-5 {
    margin-top: 3rem !important;
    margin-bottom: 3rem !important;
  }
  .my-xxl-auto {
    margin-top: auto !important;
    margin-bottom: auto !important;
  }
  .mt-xxl-0 {
    margin-top: 0 !important;
  }
  .mt-xxl-1 {
    margin-top: 0.25rem !important;
  }
  .mt-xxl-2 {
    margin-top: 0.5rem !important;
  }
  .mt-xxl-3 {
    margin-top: 1rem !important;
  }
  .mt-xxl-4 {
    margin-top: 1.5rem !important;
  }
  .mt-xxl-5 {
    margin-top: 3rem !important;
  }
  .mt-xxl-auto {
    margin-top: auto !important;
  }
  .me-xxl-0 {
    margin-right: 0 !important;
  }
  .me-xxl-1 {
    margin-right: 0.25rem !important;
  }
  .me-xxl-2 {
    margin-right: 0.5rem !important;
  }
  .me-xxl-3 {
    margin-right: 1rem !important;
  }
  .me-xxl-4 {
    margin-right: 1.5rem !important;
  }
  .me-xxl-5 {
    margin-right: 3rem !important;
  }
  .me-xxl-auto {
    margin-right: auto !important;
  }
  .mb-xxl-0 {
    margin-bottom: 0 !important;
  }
  .mb-xxl-1 {
    margin-bottom: 0.25rem !important;
  }
  .mb-xxl-2 {
    margin-bottom: 0.5rem !important;
  }
  .mb-xxl-3 {
    margin-bottom: 1rem !important;
  }
  .mb-xxl-4 {
    margin-bottom: 1.5rem !important;
  }
  .mb-xxl-5 {
    margin-bottom: 3rem !important;
  }
  .mb-xxl-auto {
    margin-bottom: auto !important;
  }
  .mb-xxl-6 {
    margin-bottom: 3.5rem !important;
  }
  .mb-xxl-7 {
    margin-bottom: 4rem !important;
  }
  .mb-xxl-8 {
    margin-bottom: 5rem !important;
  }
  .mb-xxl-9 {
    margin-bottom: 6rem !important;
  }
  .mb-xxl-10 {
    margin-bottom: 8rem !important;
  }
  .mb-xxl-11 {
    margin-bottom: 10rem !important;
  }
  .mb-xxl-12 {
    margin-bottom: 12rem !important;
  }
  .mb-xxl-13 {
    margin-bottom: 14rem !important;
  }
  .mb-xxl-14 {
    margin-bottom: 16rem !important;
  }
  .ms-xxl-0 {
    margin-left: 0 !important;
  }
  .ms-xxl-1 {
    margin-left: 0.25rem !important;
  }
  .ms-xxl-2 {
    margin-left: 0.5rem !important;
  }
  .ms-xxl-3 {
    margin-left: 1rem !important;
  }
  .ms-xxl-4 {
    margin-left: 1.5rem !important;
  }
  .ms-xxl-5 {
    margin-left: 3rem !important;
  }
  .ms-xxl-auto {
    margin-left: auto !important;
  }
  .m-xxl-n1 {
    margin: -0.25rem !important;
  }
  .m-xxl-n2 {
    margin: -0.5rem !important;
  }
  .m-xxl-n3 {
    margin: -1rem !important;
  }
  .m-xxl-n4 {
    margin: -1.5rem !important;
  }
  .m-xxl-n5 {
    margin: -3rem !important;
  }
  .mx-xxl-n1 {
    margin-right: -0.25rem !important;
    margin-left: -0.25rem !important;
  }
  .mx-xxl-n2 {
    margin-right: -0.5rem !important;
    margin-left: -0.5rem !important;
  }
  .mx-xxl-n3 {
    margin-right: -1rem !important;
    margin-left: -1rem !important;
  }
  .mx-xxl-n4 {
    margin-right: -1.5rem !important;
    margin-left: -1.5rem !important;
  }
  .mx-xxl-n5 {
    margin-right: -3rem !important;
    margin-left: -3rem !important;
  }
  .my-xxl-n1 {
    margin-top: -0.25rem !important;
    margin-bottom: -0.25rem !important;
  }
  .my-xxl-n2 {
    margin-top: -0.5rem !important;
    margin-bottom: -0.5rem !important;
  }
  .my-xxl-n3 {
    margin-top: -1rem !important;
    margin-bottom: -1rem !important;
  }
  .my-xxl-n4 {
    margin-top: -1.5rem !important;
    margin-bottom: -1.5rem !important;
  }
  .my-xxl-n5 {
    margin-top: -3rem !important;
    margin-bottom: -3rem !important;
  }
  .mt-xxl-n1 {
    margin-top: -0.25rem !important;
  }
  .mt-xxl-n2 {
    margin-top: -0.5rem !important;
  }
  .mt-xxl-n3 {
    margin-top: -1rem !important;
  }
  .mt-xxl-n4 {
    margin-top: -1.5rem !important;
  }
  .mt-xxl-n5 {
    margin-top: -3rem !important;
  }
  .me-xxl-n1 {
    margin-right: -0.25rem !important;
  }
  .me-xxl-n2 {
    margin-right: -0.5rem !important;
  }
  .me-xxl-n3 {
    margin-right: -1rem !important;
  }
  .me-xxl-n4 {
    margin-right: -1.5rem !important;
  }
  .me-xxl-n5 {
    margin-right: -3rem !important;
  }
  .mb-xxl-n1 {
    margin-bottom: -0.25rem !important;
  }
  .mb-xxl-n2 {
    margin-bottom: -0.5rem !important;
  }
  .mb-xxl-n3 {
    margin-bottom: -1rem !important;
  }
  .mb-xxl-n4 {
    margin-bottom: -1.5rem !important;
  }
  .mb-xxl-n5 {
    margin-bottom: -3rem !important;
  }
  .ms-xxl-n1 {
    margin-left: -0.25rem !important;
  }
  .ms-xxl-n2 {
    margin-left: -0.5rem !important;
  }
  .ms-xxl-n3 {
    margin-left: -1rem !important;
  }
  .ms-xxl-n4 {
    margin-left: -1.5rem !important;
  }
  .ms-xxl-n5 {
    margin-left: -3rem !important;
  }
  .p-xxl-0 {
    padding: 0 !important;
  }
  .p-xxl-1 {
    padding: 0.25rem !important;
  }
  .p-xxl-2 {
    padding: 0.5rem !important;
  }
  .p-xxl-3 {
    padding: 1rem !important;
  }
  .p-xxl-4 {
    padding: 1.5rem !important;
  }
  .p-xxl-5 {
    padding: 3rem !important;
  }
  .px-xxl-0 {
    padding-right: 0 !important;
    padding-left: 0 !important;
  }
  .px-xxl-1 {
    padding-right: 0.25rem !important;
    padding-left: 0.25rem !important;
  }
  .px-xxl-2 {
    padding-right: 0.5rem !important;
    padding-left: 0.5rem !important;
  }
  .px-xxl-3 {
    padding-right: 1rem !important;
    padding-left: 1rem !important;
  }
  .px-xxl-4 {
    padding-right: 1.5rem !important;
    padding-left: 1.5rem !important;
  }
  .px-xxl-5 {
    padding-right: 3rem !important;
    padding-left: 3rem !important;
  }
  .py-xxl-0 {
    padding-top: 0 !important;
    padding-bottom: 0 !important;
  }
  .py-xxl-1 {
    padding-top: 0.25rem !important;
    padding-bottom: 0.25rem !important;
  }
  .py-xxl-2 {
    padding-top: 0.5rem !important;
    padding-bottom: 0.5rem !important;
  }
  .py-xxl-3 {
    padding-top: 1rem !important;
    padding-bottom: 1rem !important;
  }
  .py-xxl-4 {
    padding-top: 1.5rem !important;
    padding-bottom: 1.5rem !important;
  }
  .py-xxl-5 {
    padding-top: 3rem !important;
    padding-bottom: 3rem !important;
  }
  .pt-xxl-0 {
    padding-top: 0 !important;
  }
  .pt-xxl-1 {
    padding-top: 0.25rem !important;
  }
  .pt-xxl-2 {
    padding-top: 0.5rem !important;
  }
  .pt-xxl-3 {
    padding-top: 1rem !important;
  }
  .pt-xxl-4 {
    padding-top: 1.5rem !important;
  }
  .pt-xxl-5 {
    padding-top: 3rem !important;
  }
  .pe-xxl-0 {
    padding-right: 0 !important;
  }
  .pe-xxl-1 {
    padding-right: 0.25rem !important;
  }
  .pe-xxl-2 {
    padding-right: 0.5rem !important;
  }
  .pe-xxl-3 {
    padding-right: 1rem !important;
  }
  .pe-xxl-4 {
    padding-right: 1.5rem !important;
  }
  .pe-xxl-5 {
    padding-right: 3rem !important;
  }
  .pb-xxl-0 {
    padding-bottom: 0 !important;
  }
  .pb-xxl-1 {
    padding-bottom: 0.25rem !important;
  }
  .pb-xxl-2 {
    padding-bottom: 0.5rem !important;
  }
  .pb-xxl-3 {
    padding-bottom: 1rem !important;
  }
  .pb-xxl-4 {
    padding-bottom: 1.5rem !important;
  }
  .pb-xxl-5 {
    padding-bottom: 3rem !important;
  }
  .ps-xxl-0 {
    padding-left: 0 !important;
  }
  .ps-xxl-1 {
    padding-left: 0.25rem !important;
  }
  .ps-xxl-2 {
    padding-left: 0.5rem !important;
  }
  .ps-xxl-3 {
    padding-left: 1rem !important;
  }
  .ps-xxl-4 {
    padding-left: 1.5rem !important;
  }
  .ps-xxl-5 {
    padding-left: 3rem !important;
  }
  .gap-xxl-0 {
    gap: 0 !important;
  }
  .gap-xxl-1 {
    gap: 0.25rem !important;
  }
  .gap-xxl-2 {
    gap: 0.5rem !important;
  }
  .gap-xxl-3 {
    gap: 1rem !important;
  }
  .gap-xxl-4 {
    gap: 1.5rem !important;
  }
  .gap-xxl-5 {
    gap: 3rem !important;
  }
  .text-xxl-start {
    text-align: left !important;
  }
  .text-xxl-end {
    text-align: right !important;
  }
  .text-xxl-center {
    text-align: center !important;
  }
}
@media (min-width: 1200px) {
  .fs-1 {
    font-size: 2.5rem !important;
  }
  .fs-2 {
    font-size: 2rem !important;
  }
  .fs-3 {
    font-size: 1.75rem !important;
  }
  .fs-4 {
    font-size: 1.5rem !important;
  }
}
@media print {
  .d-print-inline {
    display: inline !important;
  }
  .d-print-inline-block {
    display: inline-block !important;
  }
  .d-print-block {
    display: block !important;
  }
  .d-print-grid {
    display: grid !important;
  }
  .d-print-table {
    display: table !important;
  }
  .d-print-table-row {
    display: table-row !important;
  }
  .d-print-table-cell {
    display: table-cell !important;
  }
  .d-print-flex {
    display: flex !important;
  }
  .d-print-inline-flex {
    display: inline-flex !important;
  }
  .d-print-none {
    display: none !important;
  }
}
.diagonal-fractions {
  font-variant-numeric: diagonal-fractions;
}
.bg-super-light {
  --mdb-bg-super-light: #fbfbfb;
  background-color: var(--mdb-bg-super-light);
}
.bg-local {
  background-attachment: local;
}
.bg-scroll {
  background-attachment: scroll;
}
.overflow-y-scroll {
  overflow-y: scroll;
}
.overflow-x-scroll {
  overflow-x: scroll;
}
.table-fixed {
  table-layout: fixed;
}
.table-auto {
  table-layout: auto;
}
.link-danger,
.link-dark,
.link-info,
.link-light,
.link-primary,
.link-secondary,
.link-success,
.link-warning {
  transition: color 0.15s;
}
:root {
  --mdb-font-roboto: "Roboto", sans-serif;
  --mdb-bg-opacity: 1;
}
hr:not([size]).hr {
  --mdb-divider-height: 2px;
  --mdb-divider-bg: #f5f5f5;
  --mdb-divider-opacity: 1;
  --mdb-divider-blurry-bg: transparent;
  --mdb-divider-blurry-bg-image: linear-gradient(
    90deg,
    transparent,
    #666,
    transparent
  );
  --mdb-divider-blurry-height: 1px;
  --mdb-divider-blurry-opacity: 0.25;
  height: var(--mdb-divider-height);
  background-color: var(--mdb-divider-bg);
  opacity: var(--mdb-divider-opacity);
}
hr:not([size]).hr.hr-blurry {
  background-color: var(--mdb-divider-blurry-bg);
  background-image: var(--mdb-divider-blurry-bg-image);
  height: var(--mdb-divider-blurry-height);
  opacity: var(--mdb-divider-blurry-opacity);
}
hr:not([size]).vr {
  height: auto;
}
hr.hr,
hr.vr {
  border-top: none !important;
}
.vr {
  --mdb-divider-width: 2px;
  --mdb-divider-bg: #f5f5f5;
  --mdb-divider-opacity: 1;
  width: var(--mdb-divider-width);
  background-color: var(--mdb-divider-bg);
  opacity: var(--mdb-divider-opacity);
}
.vr-blurry {
  --mdb-divider-blurry-vr-bg-image: linear-gradient(
    180deg,
    transparent,
    #666,
    transparent
  );
  --mdb-divider-blurry-vr-width: 1px;
  --mdb-divider-blurry-opacity: 0.25;
  background-image: var(--mdb-divider-blurry-vr-bg-image);
  width: var(--mdb-divider-blurry-vr-width);
  opacity: var(--mdb-divider-blurry-opacity);
}
a {
  text-decoration: none;
}
.note {
  --mdb-note-padding: 10px;
  --mdb-note-border-width: 6px;
  --mdb-note-border-radius: 5px;
  --mdb-note-strong-font-weight: 600;
  padding: var(--mdb-note-padding);
  border-left: var(--mdb-note-border-width) solid;
  border-radius: var(--mdb-note-border-radius);
}
.note strong {
  font-weight: var(--mdb-note-strong-font-weight);
}
.note-primary {
  background-color: #dfe7f6;
  border-color: #376fc8;
}
.note-secondary {
  background-color: #ebedef;
  border-color: #565e6c;
}
.note-success {
  background-color: #d6f0e0;
  border-color: #139647;
}
.note-danger {
  background-color: #f9e1e5;
  border-color: #d62e4a;
}
.note-warning {
  background-color: #fbf0da;
  border-color: #a17112;
}
.note-info {
  background-color: #def1f7;
  border-color: #2686a6;
}
.note-light {
  background-color: #f5f5f5;
  border-color: #8c8c8c;
}
.note-dark {
  background-color: #332e2e;
  border-color: #e8e8e8;
}
@media (min-width: 1199px) {
  .w-responsive {
    width: 75%;
  }
}
.bg-primary {
  --mdb--bg-opacity: 1;
  background-color: rgba(59, 113, 202, var(--mdb--bg-opacity));
}
.bg-secondary {
  --mdb--bg-opacity: 1;
  background-color: rgba(159, 166, 178, var(--mdb--bg-opacity));
}
.bg-success {
  --mdb--bg-opacity: 1;
  background-color: rgba(20, 164, 77, var(--mdb--bg-opacity));
}
.bg-danger {
  --mdb--bg-opacity: 1;
  background-color: rgba(220, 76, 100, var(--mdb--bg-opacity));
}
.bg-warning {
  --mdb--bg-opacity: 1;
  background-color: rgba(228, 161, 27, var(--mdb--bg-opacity));
}
.bg-info {
  background-color: rgba(84, 180, 211, var(--mdb--bg-opacity));
}
.bg-info,
.bg-light {
  --mdb--bg-opacity: 1;
}
.bg-light {
  background-color: rgba(251, 251, 251, var(--mdb--bg-opacity));
}
.bg-dark {
  --mdb--bg-opacity: 1;
  background-color: rgba(51, 45, 45, var(--mdb--bg-opacity));
} /*!
 * # Semantic UI 2.4.2 - Flag
 * http://github.com/semantic-org/semantic-ui/
 *
 *
 * Released under the MIT license
 * http://opensource.org/licenses/MIT
 *
 */
#mdb-table-flag tr {
  cursor: pointer;
}
.mdb-flag-selected {
  border-top-left-radius: 5px;
  border-top-right-radius: 5px;
  text-align: center;
  max-width: 150px;
  margin: 10px auto 0;
}
.mdb-selected-flag-text {
  margin: 0 auto;
  max-width: 150px;
}
i.flag:not(.icon) {
  margin: 0 0.5em 0 0;
  line-height: 11px;
  text-decoration: inherit;
  vertical-align: baseline;
  -webkit-backface-visibility: hidden;
  backface-visibility: hidden;
}
i.flag:before,
i.flag:not(.icon) {
  display: inline-block;
  width: 16px;
  height: 11px;
}
i.flag:before {
  content: "";
  background: url(https://mdbootstrap.com/img/svg/flags.png) no-repeat -108px -1976px;
}
i.flag-ad:before,
i.flag-andorra:before {
  background-position: 0 0 !important;
}
i.flag-ae:before,
i.flag-uae:before,
i.flag-united-arab-emirates:before {
  background-position: 0 -26px !important;
}
i.flag-af:before,
i.flag-afghanistan:before {
  background-position: 0 -52px !important;
}
i.flag-ag:before,
i.flag-antigua:before {
  background-position: 0 -78px !important;
}
i.flag-ai:before,
i.flag-anguilla:before {
  background-position: 0 -104px !important;
}
i.flag-al:before,
i.flag-albania:before {
  background-position: 0 -130px !important;
}
i.flag-am:before,
i.flag-armenia:before {
  background-position: 0 -156px !important;
}
i.flag-an:before,
i.flag-netherlands-antilles:before {
  background-position: 0 -182px !important;
}
i.flag-angola:before,
i.flag-ao:before {
  background-position: 0 -208px !important;
}
i.flag-ar:before,
i.flag-argentina:before {
  background-position: 0 -234px !important;
}
i.flag-american-samoa:before,
i.flag-as:before {
  background-position: 0 -260px !important;
}
i.flag-at:before,
i.flag-austria:before {
  background-position: 0 -286px !important;
}
i.flag-au:before,
i.flag-australia:before {
  background-position: 0 -312px !important;
}
i.flag-aruba:before,
i.flag-aw:before {
  background-position: 0 -338px !important;
}
i.flag-aland-islands:before,
i.flag-ax:before {
  background-position: 0 -364px !important;
}
i.flag-az:before,
i.flag-azerbaijan:before {
  background-position: 0 -390px !important;
}
i.flag-ba:before,
i.flag-bosnia:before {
  background-position: 0 -416px !important;
}
i.flag-barbados:before,
i.flag-bb:before {
  background-position: 0 -442px !important;
}
i.flag-bangladesh:before,
i.flag-bd:before {
  background-position: 0 -468px !important;
}
i.flag-be:before,
i.flag-belgium:before {
  background-position: 0 -494px !important;
}
i.flag-bf:before,
i.flag-burkina-faso:before {
  background-position: 0 -520px !important;
}
i.flag-bg:before,
i.flag-bulgaria:before {
  background-position: 0 -546px !important;
}
i.flag-bahrain:before,
i.flag-bh:before {
  background-position: 0 -572px !important;
}
i.flag-bi:before,
i.flag-burundi:before {
  background-position: 0 -598px !important;
}
i.flag-benin:before,
i.flag-bj:before {
  background-position: 0 -624px !important;
}
i.flag-bermuda:before,
i.flag-bm:before {
  background-position: 0 -650px !important;
}
i.flag-bn:before,
i.flag-brunei:before {
  background-position: 0 -676px !important;
}
i.flag-bo:before,
i.flag-bolivia:before {
  background-position: 0 -702px !important;
}
i.flag-br:before,
i.flag-brazil:before {
  background-position: 0 -728px !important;
}
i.flag-bahamas:before,
i.flag-bs:before {
  background-position: 0 -754px !important;
}
i.flag-bhutan:before,
i.flag-bt:before {
  background-position: 0 -780px !important;
}
i.flag-bouvet-island:before,
i.flag-bv:before {
  background-position: 0 -806px !important;
}
i.flag-botswana:before,
i.flag-bw:before {
  background-position: 0 -832px !important;
}
i.flag-belarus:before,
i.flag-by:before {
  background-position: 0 -858px !important;
}
i.flag-belize:before,
i.flag-bz:before {
  background-position: 0 -884px !important;
}
i.flag-ca:before,
i.flag-canada:before {
  background-position: 0 -910px !important;
}
i.flag-cc:before,
i.flag-cocos-islands:before {
  background-position: 0 -962px !important;
}
i.flag-cd:before,
i.flag-congo:before {
  background-position: 0 -988px !important;
}
i.flag-central-african-republic:before,
i.flag-cf:before {
  background-position: 0 -1014px !important;
}
i.flag-cg:before,
i.flag-congo-brazzaville:before {
  background-position: 0 -1040px !important;
}
i.flag-ch:before,
i.flag-switzerland:before {
  background-position: 0 -1066px !important;
}
i.flag-ci:before,
i.flag-cote-divoire:before {
  background-position: 0 -1092px !important;
}
i.flag-ck:before,
i.flag-cook-islands:before {
  background-position: 0 -1118px !important;
}
i.flag-chile:before,
i.flag-cl:before {
  background-position: 0 -1144px !important;
}
i.flag-cameroon:before,
i.flag-cm:before {
  background-position: 0 -1170px !important;
}
i.flag-china:before,
i.flag-cn:before {
  background-position: 0 -1196px !important;
}
i.flag-co:before,
i.flag-colombia:before {
  background-position: 0 -1222px !important;
}
i.flag-costa-rica:before,
i.flag-cr:before {
  background-position: 0 -1248px !important;
}
i.flag-cs:before,
i.flag-serbia:before {
  background-position: 0 -1274px !important;
}
i.flag-cu:before,
i.flag-cuba:before {
  background-position: 0 -1300px !important;
}
i.flag-cape-verde:before,
i.flag-cv:before {
  background-position: 0 -1326px !important;
}
i.flag-christmas-island:before,
i.flag-cx:before {
  background-position: 0 -1352px !important;
}
i.flag-cy:before,
i.flag-cyprus:before {
  background-position: 0 -1378px !important;
}
i.flag-cz:before,
i.flag-czech-republic:before {
  background-position: 0 -1404px !important;
}
i.flag-de:before,
i.flag-germany:before {
  background-position: 0 -1430px !important;
}
i.flag-dj:before,
i.flag-djibouti:before {
  background-position: 0 -1456px !important;
}
i.flag-denmark:before,
i.flag-dk:before {
  background-position: 0 -1482px !important;
}
i.flag-dm:before,
i.flag-dominica:before {
  background-position: 0 -1508px !important;
}
i.flag-do:before,
i.flag-dominican-republic:before {
  background-position: 0 -1534px !important;
}
i.flag-algeria:before,
i.flag-dz:before {
  background-position: 0 -1560px !important;
}
i.flag-ec:before,
i.flag-ecuador:before {
  background-position: 0 -1586px !important;
}
i.flag-ee:before,
i.flag-estonia:before {
  background-position: 0 -1612px !important;
}
i.flag-eg:before,
i.flag-egypt:before {
  background-position: 0 -1638px !important;
}
i.flag-eh:before,
i.flag-western-sahara:before {
  background-position: 0 -1664px !important;
}
i.flag-england:before,
i.flag-gb-eng:before {
  background-position: 0 -1690px !important;
}
i.flag-er:before,
i.flag-eritrea:before {
  background-position: 0 -1716px !important;
}
i.flag-es:before,
i.flag-spain:before {
  background-position: 0 -1742px !important;
}
i.flag-et:before,
i.flag-ethiopia:before {
  background-position: 0 -1768px !important;
}
i.flag-eu:before,
i.flag-european-union:before {
  background-position: 0 -1794px !important;
}
i.flag-fi:before,
i.flag-finland:before {
  background-position: 0 -1846px !important;
}
i.flag-fiji:before,
i.flag-fj:before {
  background-position: 0 -1872px !important;
}
i.flag-falkland-islands:before,
i.flag-fk:before {
  background-position: 0 -1898px !important;
}
i.flag-fm:before,
i.flag-micronesia:before {
  background-position: 0 -1924px !important;
}
i.flag-faroe-islands:before,
i.flag-fo:before {
  background-position: 0 -1950px !important;
}
i.flag-fr:before,
i.flag-france:before {
  background-position: 0 -1976px !important;
}
i.flag-ga:before,
i.flag-gabon:before {
  background-position: -36px 0 !important;
}
i.flag-gb:before,
i.flag-uk:before,
i.flag-united-kingdom:before {
  background-position: -36px -26px !important;
}
i.flag-gd:before,
i.flag-grenada:before {
  background-position: -36px -52px !important;
}
i.flag-ge:before,
i.flag-georgia:before {
  background-position: -36px -78px !important;
}
i.flag-french-guiana:before,
i.flag-gf:before {
  background-position: -36px -104px !important;
}
i.flag-gh:before,
i.flag-ghana:before {
  background-position: -36px -130px !important;
}
i.flag-gi:before,
i.flag-gibraltar:before {
  background-position: -36px -156px !important;
}
i.flag-gl:before,
i.flag-greenland:before {
  background-position: -36px -182px !important;
}
i.flag-gambia:before,
i.flag-gm:before {
  background-position: -36px -208px !important;
}
i.flag-gn:before,
i.flag-guinea:before {
  background-position: -36px -234px !important;
}
i.flag-gp:before,
i.flag-guadeloupe:before {
  background-position: -36px -260px !important;
}
i.flag-equatorial-guinea:before,
i.flag-gq:before {
  background-position: -36px -286px !important;
}
i.flag-gr:before,
i.flag-greece:before {
  background-position: -36px -312px !important;
}
i.flag-gs:before,
i.flag-sandwich-islands:before {
  background-position: -36px -338px !important;
}
i.flag-gt:before,
i.flag-guatemala:before {
  background-position: -36px -364px !important;
}
i.flag-gu:before,
i.flag-guam:before {
  background-position: -36px -390px !important;
}
i.flag-guinea-bissau:before,
i.flag-gw:before {
  background-position: -36px -416px !important;
}
i.flag-guyana:before,
i.flag-gy:before {
  background-position: -36px -442px !important;
}
i.flag-hk:before,
i.flag-hong-kong:before {
  background-position: -36px -468px !important;
}
i.flag-heard-island:before,
i.flag-hm:before {
  background-position: -36px -494px !important;
}
i.flag-hn:before,
i.flag-honduras:before {
  background-position: -36px -520px !important;
}
i.flag-croatia:before,
i.flag-hr:before {
  background-position: -36px -546px !important;
}
i.flag-haiti:before,
i.flag-ht:before {
  background-position: -36px -572px !important;
}
i.flag-hu:before,
i.flag-hungary:before {
  background-position: -36px -598px !important;
}
i.flag-id:before,
i.flag-indonesia:before {
  background-position: -36px -624px !important;
}
i.flag-ie:before,
i.flag-ireland:before {
  background-position: -36px -650px !important;
}
i.flag-il:before,
i.flag-israel:before {
  background-position: -36px -676px !important;
}
i.flag-in:before,
i.flag-india:before {
  background-position: -36px -702px !important;
}
i.flag-indian-ocean-territory:before,
i.flag-io:before {
  background-position: -36px -728px !important;
}
i.flag-iq:before,
i.flag-iraq:before {
  background-position: -36px -754px !important;
}
i.flag-ir:before,
i.flag-iran:before {
  background-position: -36px -780px !important;
}
i.flag-iceland:before,
i.flag-is:before {
  background-position: -36px -806px !important;
}
i.flag-it:before,
i.flag-italy:before {
  background-position: -36px -832px !important;
}
i.flag-jamaica:before,
i.flag-jm:before {
  background-position: -36px -858px !important;
}
i.flag-jo:before,
i.flag-jordan:before {
  background-position: -36px -884px !important;
}
i.flag-japan:before,
i.flag-jp:before {
  background-position: -36px -910px !important;
}
i.flag-ke:before,
i.flag-kenya:before {
  background-position: -36px -936px !important;
}
i.flag-kg:before,
i.flag-kyrgyzstan:before {
  background-position: -36px -962px !important;
}
i.flag-cambodia:before,
i.flag-kh:before {
  background-position: -36px -988px !important;
}
i.flag-ki:before,
i.flag-kiribati:before {
  background-position: -36px -1014px !important;
}
i.flag-comoros:before,
i.flag-km:before {
  background-position: -36px -1040px !important;
}
i.flag-kn:before,
i.flag-saint-kitts-and-nevis:before {
  background-position: -36px -1066px !important;
}
i.flag-kp:before,
i.flag-north-korea:before {
  background-position: -36px -1092px !important;
}
i.flag-kr:before,
i.flag-south-korea:before {
  background-position: -36px -1118px !important;
}
i.flag-kuwait:before,
i.flag-kw:before {
  background-position: -36px -1144px !important;
}
i.flag-cayman-islands:before,
i.flag-ky:before {
  background-position: -36px -1170px !important;
}
i.flag-kazakhstan:before,
i.flag-kz:before {
  background-position: -36px -1196px !important;
}
i.flag-la:before,
i.flag-laos:before {
  background-position: -36px -1222px !important;
}
i.flag-lb:before,
i.flag-lebanon:before {
  background-position: -36px -1248px !important;
}
i.flag-lc:before,
i.flag-saint-lucia:before {
  background-position: -36px -1274px !important;
}
i.flag-li:before,
i.flag-liechtenstein:before {
  background-position: -36px -1300px !important;
}
i.flag-lk:before,
i.flag-sri-lanka:before {
  background-position: -36px -1326px !important;
}
i.flag-liberia:before,
i.flag-lr:before {
  background-position: -36px -1352px !important;
}
i.flag-lesotho:before,
i.flag-ls:before {
  background-position: -36px -1378px !important;
}
i.flag-lithuania:before,
i.flag-lt:before {
  background-position: -36px -1404px !important;
}
i.flag-lu:before,
i.flag-luxembourg:before {
  background-position: -36px -1430px !important;
}
i.flag-latvia:before,
i.flag-lv:before {
  background-position: -36px -1456px !important;
}
i.flag-libya:before,
i.flag-ly:before {
  background-position: -36px -1482px !important;
}
i.flag-ma:before,
i.flag-morocco:before {
  background-position: -36px -1508px !important;
}
i.flag-mc:before,
i.flag-monaco:before {
  background-position: -36px -1534px !important;
}
i.flag-md:before,
i.flag-moldova:before {
  background-position: -36px -1560px !important;
}
i.flag-me:before,
i.flag-montenegro:before {
  background-position: -36px -1586px !important;
}
i.flag-madagascar:before,
i.flag-mg:before {
  background-position: -36px -1613px !important;
}
i.flag-marshall-islands:before,
i.flag-mh:before {
  background-position: -36px -1639px !important;
}
i.flag-macedonia:before,
i.flag-mk:before {
  background-position: -36px -1665px !important;
}
i.flag-mali:before,
i.flag-ml:before {
  background-position: -36px -1691px !important;
}
i.flag-burma:before,
i.flag-mm:before,
i.flag-myanmar:before {
  background-position: -73px -1821px !important;
}
i.flag-mn:before,
i.flag-mongolia:before {
  background-position: -36px -1743px !important;
}
i.flag-macau:before,
i.flag-mo:before {
  background-position: -36px -1769px !important;
}
i.flag-mp:before,
i.flag-northern-mariana-islands:before {
  background-position: -36px -1795px !important;
}
i.flag-martinique:before,
i.flag-mq:before {
  background-position: -36px -1821px !important;
}
i.flag-mauritania:before,
i.flag-mr:before {
  background-position: -36px -1847px !important;
}
i.flag-montserrat:before,
i.flag-ms:before {
  background-position: -36px -1873px !important;
}
i.flag-malta:before,
i.flag-mt:before {
  background-position: -36px -1899px !important;
}
i.flag-mauritius:before,
i.flag-mu:before {
  background-position: -36px -1925px !important;
}
i.flag-maldives:before,
i.flag-mv:before {
  background-position: -36px -1951px !important;
}
i.flag-malawi:before,
i.flag-mw:before {
  background-position: -36px -1977px !important;
}
i.flag-mexico:before,
i.flag-mx:before {
  background-position: -72px 0 !important;
}
i.flag-malaysia:before,
i.flag-my:before {
  background-position: -72px -26px !important;
}
i.flag-mozambique:before,
i.flag-mz:before {
  background-position: -72px -52px !important;
}
i.flag-na:before,
i.flag-namibia:before {
  background-position: -72px -78px !important;
}
i.flag-nc:before,
i.flag-new-caledonia:before {
  background-position: -72px -104px !important;
}
i.flag-ne:before,
i.flag-niger:before {
  background-position: -72px -130px !important;
}
i.flag-nf:before,
i.flag-norfolk-island:before {
  background-position: -72px -156px !important;
}
i.flag-ng:before,
i.flag-nigeria:before {
  background-position: -72px -182px !important;
}
i.flag-ni:before,
i.flag-nicaragua:before {
  background-position: -72px -208px !important;
}
i.flag-netherlands:before,
i.flag-nl:before {
  background-position: -72px -234px !important;
}
i.flag-no:before,
i.flag-norway:before {
  background-position: -72px -260px !important;
}
i.flag-nepal:before,
i.flag-np:before {
  background-position: -72px -286px !important;
}
i.flag-nauru:before,
i.flag-nr:before {
  background-position: -72px -312px !important;
}
i.flag-niue:before,
i.flag-nu:before {
  background-position: -72px -338px !important;
}
i.flag-new-zealand:before,
i.flag-nz:before {
  background-position: -72px -364px !important;
}
i.flag-om:before,
i.flag-oman:before {
  background-position: -72px -390px !important;
}
i.flag-pa:before,
i.flag-panama:before {
  background-position: -72px -416px !important;
}
i.flag-pe:before,
i.flag-peru:before {
  background-position: -72px -442px !important;
}
i.flag-french-polynesia:before,
i.flag-pf:before {
  background-position: -72px -468px !important;
}
i.flag-new-guinea:before,
i.flag-pg:before {
  background-position: -72px -494px !important;
}
i.flag-ph:before,
i.flag-philippines:before {
  background-position: -72px -520px !important;
}
i.flag-pakistan:before,
i.flag-pk:before {
  background-position: -72px -546px !important;
}
i.flag-pl:before,
i.flag-poland:before {
  background-position: -72px -572px !important;
}
i.flag-pm:before,
i.flag-saint-pierre:before {
  background-position: -72px -598px !important;
}
i.flag-pitcairn-islands:before,
i.flag-pn:before {
  background-position: -72px -624px !important;
}
i.flag-pr:before,
i.flag-puerto-rico:before {
  background-position: -72px -650px !important;
}
i.flag-palestine:before,
i.flag-ps:before {
  background-position: -72px -676px !important;
}
i.flag-portugal:before,
i.flag-pt:before {
  background-position: -72px -702px !important;
}
i.flag-palau:before,
i.flag-pw:before {
  background-position: -72px -728px !important;
}
i.flag-paraguay:before,
i.flag-py:before {
  background-position: -72px -754px !important;
}
i.flag-qa:before,
i.flag-qatar:before {
  background-position: -72px -780px !important;
}
i.flag-re:before,
i.flag-reunion:before {
  background-position: -72px -806px !important;
}
i.flag-ro:before,
i.flag-romania:before {
  background-position: -72px -832px !important;
}
i.flag-rs:before,
i.flag-serbia:before {
  background-position: -72px -858px !important;
}
i.flag-ru:before,
i.flag-russia:before {
  background-position: -72px -884px !important;
}
i.flag-rw:before,
i.flag-rwanda:before {
  background-position: -72px -910px !important;
}
i.flag-sa:before,
i.flag-saudi-arabia:before {
  background-position: -72px -936px !important;
}
i.flag-sb:before,
i.flag-solomon-islands:before {
  background-position: -72px -962px !important;
}
i.flag-sc:before,
i.flag-seychelles:before {
  background-position: -72px -988px !important;
}
i.flag-gb-sct:before,
i.flag-scotland:before {
  background-position: -72px -1014px !important;
}
i.flag-sd:before,
i.flag-sudan:before {
  background-position: -72px -1040px !important;
}
i.flag-se:before,
i.flag-sweden:before {
  background-position: -72px -1066px !important;
}
i.flag-sg:before,
i.flag-singapore:before {
  background-position: -72px -1092px !important;
}
i.flag-saint-helena:before,
i.flag-sh:before {
  background-position: -72px -1118px !important;
}
i.flag-si:before,
i.flag-slovenia:before {
  background-position: -72px -1144px !important;
}
i.flag-jan-mayen:before,
i.flag-sj:before,
i.flag-svalbard:before {
  background-position: -72px -1170px !important;
}
i.flag-sk:before,
i.flag-slovakia:before {
  background-position: -72px -1196px !important;
}
i.flag-sierra-leone:before,
i.flag-sl:before {
  background-position: -72px -1222px !important;
}
i.flag-san-marino:before,
i.flag-sm:before {
  background-position: -72px -1248px !important;
}
i.flag-senegal:before,
i.flag-sn:before {
  background-position: -72px -1274px !important;
}
i.flag-so:before,
i.flag-somalia:before {
  background-position: -72px -1300px !important;
}
i.flag-sr:before,
i.flag-suriname:before {
  background-position: -72px -1326px !important;
}
i.flag-sao-tome:before,
i.flag-st:before {
  background-position: -72px -1352px !important;
}
i.flag-el-salvador:before,
i.flag-sv:before {
  background-position: -72px -1378px !important;
}
i.flag-sy:before,
i.flag-syria:before {
  background-position: -72px -1404px !important;
}
i.flag-swaziland:before,
i.flag-sz:before {
  background-position: -72px -1430px !important;
}
i.flag-caicos-islands:before,
i.flag-tc:before {
  background-position: -72px -1456px !important;
}
i.flag-chad:before,
i.flag-td:before {
  background-position: -72px -1482px !important;
}
i.flag-french-territories:before,
i.flag-tf:before {
  background-position: -72px -1508px !important;
}
i.flag-tg:before,
i.flag-togo:before {
  background-position: -72px -1534px !important;
}
i.flag-th:before,
i.flag-thailand:before {
  background-position: -72px -1560px !important;
}
i.flag-tajikistan:before,
i.flag-tj:before {
  background-position: -72px -1586px !important;
}
i.flag-tk:before,
i.flag-tokelau:before {
  background-position: -72px -1612px !important;
}
i.flag-timorleste:before,
i.flag-tl:before {
  background-position: -72px -1638px !important;
}
i.flag-tm:before,
i.flag-turkmenistan:before {
  background-position: -72px -1664px !important;
}
i.flag-tn:before,
i.flag-tunisia:before {
  background-position: -72px -1690px !important;
}
i.flag-to:before,
i.flag-tonga:before {
  background-position: -72px -1716px !important;
}
i.flag-tr:before,
i.flag-turkey:before {
  background-position: -72px -1742px !important;
}
i.flag-trinidad:before,
i.flag-tt:before {
  background-position: -72px -1768px !important;
}
i.flag-tuvalu:before,
i.flag-tv:before {
  background-position: -72px -1794px !important;
}
i.flag-taiwan:before,
i.flag-tw:before {
  background-position: -72px -1820px !important;
}
i.flag-tanzania:before,
i.flag-tz:before {
  background-position: -72px -1846px !important;
}
i.flag-ua:before,
i.flag-ukraine:before {
  background-position: -72px -1872px !important;
}
i.flag-ug:before,
i.flag-uganda:before {
  background-position: -72px -1898px !important;
}
i.flag-um:before,
i.flag-us-minor-islands:before {
  background-position: -72px -1924px !important;
}
i.flag-america:before,
i.flag-united-states:before,
i.flag-us:before {
  background-position: -72px -1950px !important;
}
i.flag-uruguay:before,
i.flag-uy:before {
  background-position: -72px -1976px !important;
}
i.flag-uz:before,
i.flag-uzbekistan:before {
  background-position: -108px 0 !important;
}
i.flag-va:before,
i.flag-vatican-city:before {
  background-position: -108px -26px !important;
}
i.flag-saint-vincent:before,
i.flag-vc:before {
  background-position: -108px -52px !important;
}
i.flag-ve:before,
i.flag-venezuela:before {
  background-position: -108px -78px !important;
}
i.flag-british-virgin-islands:before,
i.flag-vg:before {
  background-position: -108px -104px !important;
}
i.flag-us-virgin-islands:before,
i.flag-vi:before {
  background-position: -108px -130px !important;
}
i.flag-vietnam:before,
i.flag-vn:before {
  background-position: -108px -156px !important;
}
i.flag-vanuatu:before,
i.flag-vu:before {
  background-position: -108px -182px !important;
}
i.flag-gb-wls:before,
i.flag-wales:before {
  background-position: -108px -208px !important;
}
i.flag-wallis-and-futuna:before,
i.flag-wf:before {
  background-position: -108px -234px !important;
}
i.flag-samoa:before,
i.flag-ws:before {
  background-position: -108px -260px !important;
}
i.flag-ye:before,
i.flag-yemen:before {
  background-position: -108px -286px !important;
}
i.flag-mayotte:before,
i.flag-yt:before {
  background-position: -108px -312px !important;
}
i.flag-south-africa:before,
i.flag-za:before {
  background-position: -108px -338px !important;
}
i.flag-zambia:before,
i.flag-zm:before {
  background-position: -108px -364px !important;
}
i.flag-zimbabwe:before,
i.flag-zw:before {
  background-position: -108px -390px !important;
}
.bg-fixed {
  background-attachment: fixed;
}
.bg-image {
  position: relative;
  overflow: hidden;
  background-repeat: no-repeat;
  background-size: cover;
  background-position: 50%;
}
.mask {
  position: absolute;
  top: 0;
  right: 0;
  bottom: 0;
  left: 0;
  width: 100%;
  height: 100%;
  overflow: hidden;
  background-attachment: fixed;
}
.hover-overlay .mask {
  --mdb-image-hover-transition: all 0.3s ease-in-out;
  opacity: 0;
  transition: var(--mdb-image-hover-transition);
}
.hover-overlay .mask:hover {
  opacity: 1;
}
.hover-zoom {
  --mdb-image-hover-zoom-transition: all 0.3s linear;
  --mdb-image-hover-zoom-transform: scale(1.1);
}
.hover-zoom img,
.hover-zoom video {
  transition: var(--mdb-image-hover-zoom-transition);
}
.hover-zoom:hover img,
.hover-zoom:hover video {
  transform: var(--mdb-image-hover-zoom-transform);
}
.card.hover-shadow,
.card.hover-shadow-soft,
.hover-shadow,
.hover-shadow-soft {
  --mdb-image-hover-shadow-transition: all 0.3s ease-in-out;
  transition: var(--mdb-image-hover-shadow-transition);
}
.card.hover-shadow-soft:hover,
.card.hover-shadow:hover,
.hover-shadow-soft:hover,
.hover-shadow:hover {
  transition: var(--mdb-image-hover-shadow-transition);
}
.card.hover-shadow,
.hover-shadow {
  --mdb-image-hover-shadow-box-shadow: 0 2px 15px -3px rgba(0, 0, 0, 0.16),
    0 10px 20px -2px rgba(0, 0, 0, 0.1);
  box-shadow: none;
}
.card.hover-shadow:hover,
.hover-shadow:hover {
  box-shadow: var(--mdb-image-hover-shadow-box-shadow);
}
.card.hover-shadow-soft,
.hover-shadow-soft {
  --mdb-image-hover-shadow-box-shadow-soft: 0 2px 25px -5px rgba(0, 0, 0, 0.07),
    0 25px 21px -5px rgba(0, 0, 0, 0.04);
  box-shadow: none;
}
.card.hover-shadow-soft:hover,
.hover-shadow-soft:hover {
  box-shadow: var(--mdb-image-hover-shadow-box-shadow-soft);
}
.form-control {
  min-height: auto;
  padding: 4.5px 12px 3.68px;
  transition: all 0.1s linear;
}
.form-control:focus {
  box-shadow: none;
  transition: all 0.1s linear;
  border-color: #3b71ca;
  box-shadow: inset 0 0 0 1px #3b71ca;
}
.form-control.form-control-sm {
  font-size: 0.775rem;
  line-height: 1.5;
}
.form-control.form-control-lg {
  line-height: 2.15;
  border-radius: 0.25rem;
}
.form-outline {
  position: relative;
  width: 100%;
}
.form-outline .form-helper {
  width: 100%;
  position: absolute;
  font-size: 0.875em;
  color: #757575;
}
.form-outline .form-helper .form-counter {
  text-align: right;
}
.form-outline .trailing {
  position: absolute;
  right: 10px;
  left: auto;
  top: 50%;
  transform: translateY(-50%);
  pointer-events: none;
}
.form-outline .form-icon-trailing {
  padding-right: 2rem !important;
}
.form-outline .form-control {
  min-height: auto;
  padding: 0.32rem 0.75rem;
  border: 0;
  background: transparent;
  transition: all 0.2s linear;
}
.form-outline .form-control ~ .form-label {
  position: absolute;
  top: 0;
  max-width: 90%;
  white-space: nowrap;
  overflow: hidden;
  text-overflow: ellipsis;
  left: 0.75rem;
  padding-top: 0.37rem;
  pointer-events: none;
  transform-origin: 0 0;
  transition: all 0.2s ease-out;
  color: rgba(0, 0, 0, 0.6);
  margin-bottom: 0;
}
.form-outline .form-control ~ .form-notch {
  display: flex;
  position: absolute;
  left: 0;
  top: 0;
  width: 100%;
  max-width: 100%;
  height: 100%;
  text-align: left;
  pointer-events: none;
}
.form-outline .form-control ~ .form-notch div {
  pointer-events: none;
  border: 1px solid #bdbdbd;
  box-sizing: border-box;
  background: transparent;
  transition: all 0.2s linear;
}
.form-outline .form-control ~ .form-notch .form-notch-leading {
  left: 0;
  top: 0;
  height: 100%;
  width: 0.5rem;
  border-right: none;
  border-radius: 0.25rem 0 0 0.25rem;
}
.form-outline .form-control ~ .form-notch .form-notch-middle {
  flex: 0 0 auto;
  width: auto;
  max-width: calc(100% - 1rem);
  height: 100%;
  border-right: none;
  border-left: none;
}
.form-outline .form-control ~ .form-notch .form-notch-trailing {
  flex-grow: 1;
  height: 100%;
  border-left: none;
  border-radius: 0 0.25rem 0.25rem 0;
}
.form-outline .form-control:not(.placeholder-active)::-moz-placeholder {
  opacity: 0;
}
.form-outline .form-control:not(.placeholder-active)::placeholder {
  opacity: 0;
}
.form-outline .form-control.active::-moz-placeholder,
.form-outline .form-control:focus::-moz-placeholder {
  opacity: 1;
}
.form-outline .form-control.active::placeholder,
.form-outline .form-control:focus::placeholder {
  opacity: 1;
}
.form-outline .form-control:focus {
  box-shadow: none !important;
}
.form-outline .form-control.active ~ .form-label,
.form-outline .form-control:focus ~ .form-label {
  transform: translateY(-1rem) translateY(0.1rem) scale(0.8);
}
.form-outline .form-control:focus ~ .form-label {
  color: #3b71ca;
}
.form-outline .form-control.active ~ .form-notch .form-notch-middle,
.form-outline .form-control:focus ~ .form-notch .form-notch-middle {
  border-right: none;
  border-left: none;
  border-top: 1px solid transparent;
}
.form-outline .form-control:focus ~ .form-notch .form-notch-middle {
  border-color: #3b71ca;
  box-shadow: 0 1px 0 0 #3b71ca;
  border-top: 1px solid transparent;
}
.form-outline .form-control.active ~ .form-notch .form-notch-leading,
.form-outline .form-control:focus ~ .form-notch .form-notch-leading {
  border-right: none;
}
.form-outline .form-control:focus ~ .form-notch .form-notch-leading {
  border-color: #3b71ca;
  box-shadow: -1px 0 0 0 #3b71ca, 0 1px 0 0 #3b71ca, 0 -1px 0 0 #3b71ca;
}
.form-outline .form-control.active ~ .form-notch .form-notch-trailing,
.form-outline .form-control:focus ~ .form-notch .form-notch-trailing {
  border-left: none;
}
.form-outline .form-control:focus ~ .form-notch .form-notch-trailing {
  border-color: #3b71ca;
  box-shadow: 1px 0 0 0 #3b71ca, 0 -1px 0 0 #3b71ca, 0 1px 0 0 #3b71ca;
}
.form-outline .form-control.disabled,
.form-outline .form-control:disabled,
.form-outline .form-control[readonly] {
  background-color: #e9ecef;
}
.form-outline .form-control.form-control-lg {
  font-size: 1rem;
  line-height: 2.15;
}
.form-outline .form-control.form-control-lg ~ .form-label {
  padding-top: 0.7rem;
}
.form-outline .form-control.form-control-lg.active ~ .form-label,
.form-outline .form-control.form-control-lg:focus ~ .form-label {
  transform: translateY(-1.25rem) translateY(0.1rem) scale(0.8);
}
.form-outline .form-control.form-control-sm {
  padding-top: 0.32rem;
  padding-bottom: 0.32rem;
  font-size: 0.775rem;
  line-height: 1.5;
}
.form-outline .form-control.form-control-sm ~ .form-label {
  padding-top: 0.33rem;
  font-size: 0.775rem;
}
.form-outline .form-control.form-control-sm.active ~ .form-label,
.form-outline .form-control.form-control-sm:focus ~ .form-label {
  transform: translateY(-0.85rem) translateY(0.1rem) scale(0.8);
}
.form-outline.form-white .form-control {
  color: #fff;
}
.form-outline.form-white .form-control ~ .form-label {
  color: #fbfbfb;
}
.form-outline.form-white .form-control ~ .form-notch div {
  border-color: #fbfbfb;
}
.form-outline.form-white .form-control:focus ~ .form-label {
  color: #fff;
}
.form-outline.form-white .form-control:focus ~ .form-notch .form-notch-middle {
  border-color: #fff;
  box-shadow: 0 1px 0 0 #fff;
  border-top: 1px solid transparent;
}
.form-outline.form-white .form-control:focus ~ .form-notch .form-notch-leading {
  border-color: #fff;
  box-shadow: -1px 0 0 0 #fff, 0 1px 0 0 #fff, 0 -1px 0 0 #fff;
}
.form-outline.form-white
  .form-control:focus
  ~ .form-notch
  .form-notch-trailing {
  border-color: #fff;
  box-shadow: 1px 0 0 0 #fff, 0 -1px 0 0 #fff, 0 1px 0 0 #fff;
}
.form-outline.form-white .form-control::-moz-placeholder {
  color: hsla(0, 0%, 100%, 0.7);
}
.form-outline.form-white .form-control::placeholder {
  color: hsla(0, 0%, 100%, 0.7);
}
.form-outline.form-white .form-control.disabled,
.form-outline.form-white .form-control:disabled,
.form-outline.form-white .form-control[readonly] {
  background-color: hsla(0, 0%, 100%, 0.45);
}
.select-input.form-control[readonly]:not([disabled]) {
  background-color: transparent;
}
.form-select {
  transition: all 0.2s linear;
}
.form-select:focus {
  border-color: #3b71ca;
  outline: 0;
  box-shadow: inset 0 0 0 1px #3b71ca;
}
.form-check {
  min-height: 1.5rem;
}
.form-check-input {
  position: relative;
  width: 1.125rem;
  height: 1.125rem;
  background-color: #fff;
  border: 0.125rem solid rgba(0, 0, 0, 0.25);
}
.form-check-input:before {
  content: "";
  position: absolute;
  box-shadow: 0 0 0 13px transparent;
  border-radius: 50%;
  width: 0.875rem;
  height: 0.875rem;
  background-color: transparent;
  opacity: 0;
  pointer-events: none;
  transform: scale(0);
}
.form-check-input:hover {
  cursor: pointer;
}
.form-check-input:hover:before {
  opacity: 0.04;
  box-shadow: 0 0 0 13px rgba(0, 0, 0, 0.6);
}
.form-check-input:focus {
  box-shadow: none;
  border-color: rgba(0, 0, 0, 0.25);
  transition: border-color 0.2s;
}
.form-check-input:focus:before {
  opacity: 0.12;
  box-shadow: 0 0 0 13px rgba(0, 0, 0, 0.6);
  transform: scale(1);
  transition: box-shadow 0.2s, transform 0.2s;
}
.form-check-input:checked {
  border-color: #3b71ca;
}
.form-check-input:checked:before {
  opacity: 0.16;
}
.form-check-input:checked:after {
  content: "";
  position: absolute;
}
.form-check-input:checked:focus {
  border-color: #3b71ca;
}
.form-check-input:checked:focus:before {
  box-shadow: 0 0 0 13px #3b71ca;
  transform: scale(1);
  transition: box-shadow 0.2s, transform 0.2s;
}
.form-check-input:indeterminate:focus:before {
  box-shadow: 0 0 0 13px #3b71ca;
}
.form-check-input[type="checkbox"] {
  border-radius: 0.25rem;
  margin-top: 0.19em;
  margin-right: 6px;
}
.form-check-input[type="checkbox"]:focus:after {
  content: "";
  position: absolute;
  width: 0.875rem;
  height: 0.875rem;
  z-index: 1;
  display: block;
  border-radius: 0;
  background-color: #fff;
}
.form-check-input[type="checkbox"]:checked {
  background-image: none;
  background-color: #3b71ca;
}
.form-check-input[type="checkbox"]:checked:after {
  display: block;
  transform: rotate(45deg) /*!rtl:ignore*/;
  width: 0.375rem;
  height: 0.8125rem;
  border: 0.125rem solid #fff;
  border-top: 0;
  border-left: 0 /*!rtl:ignore*/;
  margin-left: 0.25rem;
  margin-top: -1px;
  background-color: transparent;
}
.form-check-input[type="checkbox"]:checked:focus {
  background-color: #3b71ca;
}
.form-check-input[type="checkbox"]:indeterminate {
  border-color: #3b71ca;
}
.form-check-input[type="radio"] {
  border-radius: 50%;
  width: 1.25rem;
  height: 1.25rem;
  margin-top: 0.125em;
  margin-right: 4px;
}
.form-check-input[type="radio"]:before {
  width: 1rem;
  height: 1rem;
}
.form-check-input[type="radio"]:after {
  content: "";
  position: absolute;
  width: 1rem;
  height: 1rem;
  z-index: 1;
  display: block;
  border-radius: 50%;
  background-color: #fff;
}
.form-check-input[type="radio"]:checked {
  background-image: none;
  background-color: #fff;
}
.form-check-input[type="radio"]:checked:after {
  border-radius: 50%;
  width: 0.625rem;
  height: 0.625rem;
  border-color: #3b71ca;
  background-color: #3b71ca;
  transition: border-color;
  transform: translate(-50%, -50%);
  position: absolute;
  left: 50%;
  top: 50%;
}
.form-check-input[type="radio"]:checked:focus {
  background-color: #fff;
}
.form-check-label {
  padding-left: 0.15rem;
}
.form-check-label:hover {
  cursor: pointer;
}
.form-switch .form-check-input {
  background-image: none;
  border-width: 0;
  border-radius: 0.4375rem;
  width: 2rem;
  height: 0.875rem;
  background-color: rgba(0, 0, 0, 0.25);
  margin-top: 0.3em;
  margin-right: 8px;
}
.form-switch .form-check-input:after {
  content: "";
  position: absolute;
  border: none;
  z-index: 2;
  border-radius: 50%;
  width: 1.25rem;
  height: 1.25rem;
  background-color: #fff;
  margin-top: -0.1875rem;
  box-shadow: 0 0 3px 0 rgba(0, 0, 0, 0.07), 0 2px 2px 0 rgba(0, 0, 0, 0.04);
  transition: background-color 0.2s, transform 0.2s;
}
.form-switch .form-check-input:focus {
  background-image: none;
}
.form-switch .form-check-input:focus:before {
  box-shadow: 3px -1px 0 13px rgba(0, 0, 0, 0.6);
  transform: scale(1);
  transition: box-shadow 0.2s, transform 0.2s;
}
.form-switch .form-check-input:focus:after {
  border-radius: 50%;
  width: 1.25rem;
  height: 1.25rem;
}
.form-switch .form-check-input:checked,
.form-switch .form-check-input:checked:focus {
  background-image: none;
}
.form-switch .form-check-input:checked:focus:before {
  margin-left: 1.0625rem;
  box-shadow: 3px -1px 0 13px #3b71ca;
  transform: scale(1);
  transition: box-shadow 0.2s, transform 0.2s;
}
.form-switch .form-check-input:checked[type="checkbox"] {
  background-image: none;
}
.form-switch .form-check-input:checked[type="checkbox"]:after {
  content: "";
  position: absolute;
  border: none;
  z-index: 2;
  border-radius: 50%;
  width: 1.25rem;
  height: 1.25rem;
  background-color: #3b71ca;
  margin-top: -3px;
  margin-left: 1.0625rem;
  box-shadow: 0 3px 1px -2px rgba(0, 0, 0, 0.2), 0 2px 2px 0 rgba(0, 0, 0, 0.14),
    0 1px 5px 0 rgba(0, 0, 0, 0.12);
  transition: background-color 0.2s, transform 0.2s;
}
.form-control:hover:not(:disabled):not([readonly])::-webkit-file-upload-button,
.form-control[type="file"]::-webkit-file-upload-button {
  background-color: transparent;
}
.input-group {
  flex-wrap: nowrap;
}
.input-group > .form-control {
  min-height: calc(2.08rem + 2px);
  height: calc(2.08rem + 2px);
  padding-top: 0.27rem;
  padding-bottom: 0.27rem;
  transition: all 0.2s linear;
}
.input-group > .form-control:focus {
  transition: all 0.2s linear;
  border-color: #3b71ca;
  outline: 0;
  box-shadow: inset 0 0 0 1px #3b71ca;
}
.input-group-text {
  background-color: transparent;
  padding-top: 0.26rem;
  padding-bottom: 0.26rem;
}
.input-group-text > .form-check-input[type="checkbox"] {
  margin-left: 1px;
  margin-right: 1px;
}
.input-group-text > .form-check-input[type="radio"] {
  margin-right: 0;
}
.input-group-lg > .form-control {
  height: calc(2.645rem + 2px);
  font-size: 1rem;
  padding-top: 0.33rem;
  padding-bottom: 0.33rem;
}
.input-group-lg .input-group-text {
  font-size: 1rem;
}
.input-group-sm > .form-control {
  min-height: calc(1.66rem + 2px);
  height: calc(1.66rem + 2px);
  font-size: 0.775rem;
  padding-top: 0.33rem;
  padding-bottom: 0.33rem;
}
.input-group-sm .input-group-text {
  font-size: 0.775rem;
  line-height: 1.5;
}
.input-group.form-outline .input-group-text {
  border-left: 0;
}
.input-group.form-outline input + .input-group-text {
  border: 0;
  border-left: 1px solid #bdbdbd;
}
.input-group .form-outline:not(:first-child),
.input-group .form-outline:not(:first-child) .form-notch-leading,
.input-group .select-wrapper:not(:first-child),
.input-group .select-wrapper:not(:first-child) .form-notch-leading {
  border-top-left-radius: 0 !important;
  border-bottom-left-radius: 0 !important;
}
.input-group .form-outline:not(:last-child),
.input-group .form-outline:not(:last-child) .form-notch-trailing,
.input-group .select-wrapper:not(:last-child),
.input-group .select-wrapper:not(:last-child) .form-notch-trailing {
  border-top-right-radius: 0 !important;
  border-bottom-right-radius: 0 !important;
}
.input-group > [class*="btn-outline-"] + [class*="btn-outline-"] {
  border-left: 0;
}
.input-group > .btn[class*="btn-outline-"] {
  padding-top: 0.47rem;
}
.input-group > .btn {
  padding-top: 0.59rem;
}
.input-group.input-group-lg .input-group-text {
  height: calc(2.645rem + 2px);
}
.input-group .input-group-text {
  height: calc(2.08rem + 2px);
}
.input-group .btn {
  line-height: 1;
}
.input-group.input-group-sm .input-group-text {
  height: calc(1.66rem + 2px);
}
.input-group .invalid-feedback,
.input-group .valid-feedback,
.was-validated .input-group .invalid-feedback,
.was-validated .input-group .valid-feedback {
  margin-top: 2.5rem;
}
.valid-feedback {
  width: auto;
  color: #14a44d;
  margin-top: -0.75rem;
}
.valid-feedback,
.valid-tooltip {
  position: absolute;
  display: none;
  font-size: 0.875rem;
}
.valid-tooltip {
  top: 100%;
  z-index: 5;
  max-width: 100%;
  padding: 6px 16px;
  margin-top: 0.1rem;
  background-color: rgba(20, 164, 77, 0.9);
  border-radius: 0.25rem !important;
  color: #fff;
}
.is-valid ~ .valid-feedback,
.is-valid ~ .valid-tooltip,
.was-validated :valid ~ .valid-feedback,
.was-validated :valid ~ .valid-tooltip {
  display: block;
}
.form-control.is-valid,
.was-validated .form-control:valid {
  margin-bottom: 1rem;
  background-image: none;
  border-color: #14a44d;
}
.form-control.is-valid:focus,
.was-validated .form-control:valid:focus {
  border-color: #14a44d;
  box-shadow: 0 0 0 0.25rem rgba(20, 164, 77, 0.25);
}
.form-outline .form-control.is-valid ~ .form-label,
.was-validated .form-outline .form-control:valid ~ .form-label {
  color: #14a44d;
}
.form-outline .form-control.is-valid ~ .form-notch .form-notch-leading,
.form-outline .form-control.is-valid ~ .form-notch .form-notch-middle,
.form-outline .form-control.is-valid ~ .form-notch .form-notch-trailing,
.was-validated
  .form-outline
  .form-control:valid
  ~ .form-notch
  .form-notch-leading,
.was-validated
  .form-outline
  .form-control:valid
  ~ .form-notch
  .form-notch-middle,
.was-validated
  .form-outline
  .form-control:valid
  ~ .form-notch
  .form-notch-trailing {
  border-color: #14a44d;
}
.form-outline .form-control.is-valid.active ~ .form-notch .form-notch-middle,
.form-outline .form-control.is-valid:focus ~ .form-notch .form-notch-middle,
.was-validated
  .form-outline
  .form-control:valid.active
  ~ .form-notch
  .form-notch-middle,
.was-validated
  .form-outline
  .form-control:valid:focus
  ~ .form-notch
  .form-notch-middle {
  border-top: 1px solid transparent;
}
.form-outline .form-control.is-valid:focus ~ .form-notch .form-notch-middle,
.was-validated
  .form-outline
  .form-control:valid:focus
  ~ .form-notch
  .form-notch-middle {
  box-shadow: 0 1px 0 0 #14a44d;
}
.form-outline .form-control.is-valid:focus ~ .form-notch .form-notch-leading,
.was-validated
  .form-outline
  .form-control:valid:focus
  ~ .form-notch
  .form-notch-leading {
  box-shadow: -1px 0 0 0 #14a44d, 0 1px 0 0 #14a44d, 0 -1px 0 0 #14a44d;
}
.form-outline .form-control.is-valid:focus ~ .form-notch .form-notch-trailing,
.was-validated
  .form-outline
  .form-control:valid:focus
  ~ .form-notch
  .form-notch-trailing {
  box-shadow: 1px 0 0 0 #14a44d, 0 -1px 0 0 #14a44d, 0 1px 0 0 #14a44d;
}
.form-outline
  .form-control.is-valid.select-input.focused
  ~ .form-notch
  .form-notch-leading,
.was-validated
  .form-outline
  .form-control:valid.select-input.focused
  ~ .form-notch
  .form-notch-leading {
  box-shadow: -1px 0 0 0 #14a44d, 0 1px 0 0 #14a44d, 0 -1px 0 0 #14a44d;
}
.form-outline
  .form-control.is-valid.select-input.focused
  ~ .form-notch
  .form-notch-middle,
.was-validated
  .form-outline
  .form-control:valid.select-input.focused
  ~ .form-notch
  .form-notch-middle {
  box-shadow: 0 1px 0 0 #14a44d;
  border-top: 1px solid transparent;
}
.form-outline
  .form-control.is-valid.select-input.focused
  ~ .form-notch
  .form-notch-trailing,
.was-validated
  .form-outline
  .form-control:valid.select-input.focused
  ~ .form-notch
  .form-notch-trailing {
  box-shadow: 1px 0 0 0 #14a44d, 0 -1px 0 0 #14a44d, 0 1px 0 0 #14a44d;
}
.form-select.is-valid,
.was-validated .form-select:valid {
  border-color: #14a44d;
}
.form-select.is-valid:focus,
.was-validated .form-select:valid:focus {
  border-color: #14a44d;
  box-shadow: 0 0 0 0.25rem rgba(20, 164, 77, 0.25);
}
.form-select.is-valid ~ .valid-feedback,
.was-validated .form-select:valid ~ .valid-feedback {
  margin-top: 0;
}
.input-group .form-control.is-valid,
.was-validated .input-group .form-control:valid {
  margin-bottom: 0;
}
.was-validated input[type="file"].form-control:valid .valid-feedback,
input[type="file"].form-control.is-valid .valid-feedback {
  margin-top: 0;
}
.was-validated input[type="file"].form-control:valid:focus,
input[type="file"].form-control.is-valid:focus {
  box-shadow: inset 0 0 0 1px #14a44d;
  border-color: #14a44d;
}
.was-validated input[type="file"].form-control:valid:focus ~ .form-file-label,
input[type="file"].form-control.is-valid:focus ~ .form-file-label {
  box-shadow: none;
}
.was-validated
  input[type="file"].form-control:valid:focus-within
  ~ .form-file-label
  .form-file-button,
.was-validated
  input[type="file"].form-control:valid:focus-within
  ~ .form-file-label
  .form-file-text,
input[type="file"].form-control.is-valid:focus-within
  ~ .form-file-label
  .form-file-button,
input[type="file"].form-control.is-valid:focus-within
  ~ .form-file-label
  .form-file-text {
  border-color: #14a44d;
}
.form-check-input.is-valid,
.was-validated .form-check-input:valid {
  border-color: #14a44d;
}
.form-check-input.is-valid:checked,
.was-validated .form-check-input:valid:checked {
  background-color: #14a44d;
}
.form-check-input.is-valid:checked:focus:before,
.was-validated .form-check-input:valid:checked:focus:before {
  box-shadow: 0 0 0 13px #14a44d;
}
.form-check-input.is-valid:focus,
.was-validated .form-check-input:valid:focus {
  box-shadow: none;
}
.form-check-input.is-valid:focus:before,
.was-validated .form-check-input:valid:focus:before {
  box-shadow: 0 0 0 13px #14a44d;
}
.form-check-input.is-valid ~ .form-check-label,
.was-validated .form-check-input:valid ~ .form-check-label {
  color: #14a44d;
  margin-bottom: 1rem;
}
.form-check-input.is-valid[type="checkbox"]:checked:focus,
.was-validated .form-check-input:valid[type="checkbox"]:checked:focus {
  background-color: #14a44d;
  border-color: #14a44d;
}
.form-check-input.is-valid[type="radio"]:checked,
.was-validated .form-check-input:valid[type="radio"]:checked {
  border-color: #14a44d;
  background-color: #fff;
}
.form-check-input.is-valid[type="radio"]:checked:focus:before,
.was-validated .form-check-input:valid[type="radio"]:checked:focus:before {
  box-shadow: 0 0 0 13px #14a44d;
}
.form-check-input.is-valid[type="radio"]:checked:after,
.was-validated .form-check-input:valid[type="radio"]:checked:after {
  border-color: #14a44d;
  background-color: #14a44d;
}
.form-check-inline .form-check-input ~ .valid-feedback {
  margin-left: 0.5em;
}
.form-switch .form-check-input.is-valid:focus:before,
.was-validated .form-switch .form-check-input:valid:focus:before {
  box-shadow: 3px -1px 0 13px rgba(0, 0, 0, 0.6);
}
.form-switch .form-check-input.is-valid:checked[type="checkbox"]:after,
.was-validated
  .form-switch
  .form-check-input:valid:checked[type="checkbox"]:after {
  background-color: #14a44d;
  box-shadow: 0 3px 1px -2px rgba(0, 0, 0, 0.2), 0 2px 2px 0 rgba(0, 0, 0, 0.14),
    0 1px 5px 0 rgba(0, 0, 0, 0.12);
}
.form-switch .form-check-input.is-valid:checked:focus:before,
.was-validated .form-switch .form-check-input:valid:checked:focus:before {
  box-shadow: 3px -1px 0 13px #14a44d;
}
.invalid-feedback {
  width: auto;
  color: #dc4c64;
  margin-top: -0.75rem;
}
.invalid-feedback,
.invalid-tooltip {
  position: absolute;
  display: none;
  font-size: 0.875rem;
}
.invalid-tooltip {
  top: 100%;
  z-index: 5;
  max-width: 100%;
  padding: 6px 16px;
  margin-top: 0.1rem;
  background-color: rgba(220, 76, 100, 0.9);
  border-radius: 0.25rem !important;
  color: #fff;
}
.is-invalid ~ .invalid-feedback,
.is-invalid ~ .invalid-tooltip,
.was-validated :invalid ~ .invalid-feedback,
.was-validated :invalid ~ .invalid-tooltip {
  display: block;
}
.form-control.is-invalid,
.was-validated .form-control:invalid {
  margin-bottom: 1rem;
  background-image: none;
  border-color: #dc4c64;
}
.form-control.is-invalid:focus,
.was-validated .form-control:invalid:focus {
  border-color: #dc4c64;
  box-shadow: 0 0 0 0.25rem rgba(220, 76, 100, 0.25);
}
.form-outline .form-control.is-invalid ~ .form-label,
.was-validated .form-outline .form-control:invalid ~ .form-label {
  color: #dc4c64;
}
.form-outline .form-control.is-invalid ~ .form-notch .form-notch-leading,
.form-outline .form-control.is-invalid ~ .form-notch .form-notch-middle,
.form-outline .form-control.is-invalid ~ .form-notch .form-notch-trailing,
.was-validated
  .form-outline
  .form-control:invalid
  ~ .form-notch
  .form-notch-leading,
.was-validated
  .form-outline
  .form-control:invalid
  ~ .form-notch
  .form-notch-middle,
.was-validated
  .form-outline
  .form-control:invalid
  ~ .form-notch
  .form-notch-trailing {
  border-color: #dc4c64;
}
.form-outline .form-control.is-invalid.active ~ .form-notch .form-notch-middle,
.form-outline .form-control.is-invalid:focus ~ .form-notch .form-notch-middle,
.was-validated
  .form-outline
  .form-control:invalid.active
  ~ .form-notch
  .form-notch-middle,
.was-validated
  .form-outline
  .form-control:invalid:focus
  ~ .form-notch
  .form-notch-middle {
  border-top: 1px solid transparent;
}
.form-outline .form-control.is-invalid:focus ~ .form-notch .form-notch-middle,
.was-validated
  .form-outline
  .form-control:invalid:focus
  ~ .form-notch
  .form-notch-middle {
  box-shadow: 0 1px 0 0 #dc4c64;
}
.form-outline .form-control.is-invalid:focus ~ .form-notch .form-notch-leading,
.was-validated
  .form-outline
  .form-control:invalid:focus
  ~ .form-notch
  .form-notch-leading {
  box-shadow: -1px 0 0 0 #dc4c64, 0 1px 0 0 #dc4c64, 0 -1px 0 0 #dc4c64;
}
.form-outline .form-control.is-invalid:focus ~ .form-notch .form-notch-trailing,
.was-validated
  .form-outline
  .form-control:invalid:focus
  ~ .form-notch
  .form-notch-trailing {
  box-shadow: 1px 0 0 0 #dc4c64, 0 -1px 0 0 #dc4c64, 0 1px 0 0 #dc4c64;
}
.form-outline
  .form-control.is-invalid.select-input.focused
  ~ .form-notch
  .form-notch-leading,
.was-validated
  .form-outline
  .form-control:invalid.select-input.focused
  ~ .form-notch
  .form-notch-leading {
  box-shadow: -1px 0 0 0 #dc4c64, 0 1px 0 0 #dc4c64, 0 -1px 0 0 #dc4c64;
}
.form-outline
  .form-control.is-invalid.select-input.focused
  ~ .form-notch
  .form-notch-middle,
.was-validated
  .form-outline
  .form-control:invalid.select-input.focused
  ~ .form-notch
  .form-notch-middle {
  box-shadow: 0 1px 0 0 #dc4c64;
  border-top: 1px solid transparent;
}
.form-outline
  .form-control.is-invalid.select-input.focused
  ~ .form-notch
  .form-notch-trailing,
.was-validated
  .form-outline
  .form-control:invalid.select-input.focused
  ~ .form-notch
  .form-notch-trailing {
  box-shadow: 1px 0 0 0 #dc4c64, 0 -1px 0 0 #dc4c64, 0 1px 0 0 #dc4c64;
}
.form-select.is-invalid,
.was-validated .form-select:invalid {
  border-color: #dc4c64;
}
.form-select.is-invalid:focus,
.was-validated .form-select:invalid:focus {
  border-color: #dc4c64;
  box-shadow: 0 0 0 0.25rem rgba(220, 76, 100, 0.25);
}
.form-select.is-invalid ~ .invalid-feedback,
.was-validated .form-select:invalid ~ .invalid-feedback {
  margin-top: 0;
}
.input-group .form-control.is-invalid,
.was-validated .input-group .form-control:invalid {
  margin-bottom: 0;
}
.was-validated input[type="file"].form-control:invalid .invalid-feedback,
input[type="file"].form-control.is-invalid .invalid-feedback {
  margin-top: 0;
}
.was-validated input[type="file"].form-control:invalid:focus,
input[type="file"].form-control.is-invalid:focus {
  box-shadow: inset 0 0 0 1px #dc4c64;
  border-color: #dc4c64;
}
.was-validated input[type="file"].form-control:invalid:focus ~ .form-file-label,
input[type="file"].form-control.is-invalid:focus ~ .form-file-label {
  box-shadow: none;
}
.was-validated
  input[type="file"].form-control:invalid:focus-within
  ~ .form-file-label
  .form-file-button,
.was-validated
  input[type="file"].form-control:invalid:focus-within
  ~ .form-file-label
  .form-file-text,
input[type="file"].form-control.is-invalid:focus-within
  ~ .form-file-label
  .form-file-button,
input[type="file"].form-control.is-invalid:focus-within
  ~ .form-file-label
  .form-file-text {
  border-color: #dc4c64;
}
.form-check-input.is-invalid,
.was-validated .form-check-input:invalid {
  border-color: #dc4c64;
}
.form-check-input.is-invalid:checked,
.was-validated .form-check-input:invalid:checked {
  background-color: #dc4c64;
}
.form-check-input.is-invalid:checked:focus:before,
.was-validated .form-check-input:invalid:checked:focus:before {
  box-shadow: 0 0 0 13px #dc4c64;
}
.form-check-input.is-invalid:focus,
.was-validated .form-check-input:invalid:focus {
  box-shadow: none;
}
.form-check-input.is-invalid:focus:before,
.was-validated .form-check-input:invalid:focus:before {
  box-shadow: 0 0 0 13px #dc4c64;
}
.form-check-input.is-invalid ~ .form-check-label,
.was-validated .form-check-input:invalid ~ .form-check-label {
  color: #dc4c64;
  margin-bottom: 1rem;
}
.form-check-input.is-invalid[type="checkbox"]:checked:focus,
.was-validated .form-check-input:invalid[type="checkbox"]:checked:focus {
  background-color: #dc4c64;
  border-color: #dc4c64;
}
.form-check-input.is-invalid[type="radio"]:checked,
.was-validated .form-check-input:invalid[type="radio"]:checked {
  border-color: #dc4c64;
  background-color: #fff;
}
.form-check-input.is-invalid[type="radio"]:checked:focus:before,
.was-validated .form-check-input:invalid[type="radio"]:checked:focus:before {
  box-shadow: 0 0 0 13px #dc4c64;
}
.form-check-input.is-invalid[type="radio"]:checked:after,
.was-validated .form-check-input:invalid[type="radio"]:checked:after {
  border-color: #dc4c64;
  background-color: #dc4c64;
}
.form-check-inline .form-check-input ~ .invalid-feedback {
  margin-left: 0.5em;
}
.form-switch .form-check-input.is-invalid:focus:before,
.was-validated .form-switch .form-check-input:invalid:focus:before {
  box-shadow: 3px -1px 0 13px rgba(0, 0, 0, 0.6);
}
.form-switch .form-check-input.is-invalid:checked[type="checkbox"]:after,
.was-validated
  .form-switch
  .form-check-input:invalid:checked[type="checkbox"]:after {
  background-color: #dc4c64;
  box-shadow: 0 3px 1px -2px rgba(0, 0, 0, 0.2), 0 2px 2px 0 rgba(0, 0, 0, 0.14),
    0 1px 5px 0 rgba(0, 0, 0, 0.12);
}
.form-switch .form-check-input.is-invalid:checked:focus:before,
.was-validated .form-switch .form-check-input:invalid:checked:focus:before {
  box-shadow: 3px -1px 0 13px #dc4c64;
}
.form-range:focus {
  box-shadow: none;
}
.form-range:focus::-webkit-slider-thumb {
  box-shadow: none;
}
.form-range:focus::-moz-range-thumb {
  box-shadow: none;
}
.form-range:focus::-ms-thumb {
  box-shadow: none;
}
.form-range::-moz-focus-outer {
  border: 0;
}
.form-range::-webkit-slider-thumb {
  margin-top: -6px;
  box-shadow: none;
  -webkit-appearance: none;
  appearance: none;
}
.form-range::-webkit-slider-runnable-track {
  height: 4px;
  border-radius: 0;
  box-shadow: none;
}
.form-range::-moz-range-thumb {
  box-shadow: none;
  -moz-appearance: none;
  appearance: none;
}
.form-range::-moz-range-track {
  box-shadow: none;
}
.table {
  --mdb-table-font-size: 0.9rem;
  --mdb-table-divider-color: rgba(0, 0, 0, 0.1);
  font-size: var(--mdb-table-font-size);
}
.table th {
  font-weight: 500;
}
.table tbody {
  font-weight: 400;
}
.table > :not(:last-child) > :last-child > * {
  border-bottom-color: inherit;
}
.table-primary {
  --mdb-table-color: #000;
  --mdb-table-bg: #d8e3f4;
  --mdb-table-border-color: #c2ccdc;
  --mdb-table-striped-bg: #cdd8e8;
  --mdb-table-striped-color: #000;
  --mdb-table-active-bg: #c2ccdc;
  --mdb-table-active-color: #000;
  --mdb-table-hover-bg: #c8d2e2;
  --mdb-table-hover-color: #000;
}
.table-primary,
.table-secondary {
  color: var(--mdb-table-color);
  border-color: var(--mdb-table-border-color);
}
.table-secondary {
  --mdb-table-color: #000;
  --mdb-table-bg: #ecedf0;
  --mdb-table-border-color: #d4d5d8;
  --mdb-table-striped-bg: #e0e1e4;
  --mdb-table-striped-color: #000;
  --mdb-table-active-bg: #d4d5d8;
  --mdb-table-active-color: #000;
  --mdb-table-hover-bg: #dadbde;
  --mdb-table-hover-color: #000;
}
.table-success {
  --mdb-table-color: #000;
  --mdb-table-bg: #d0eddb;
  --mdb-table-border-color: #bbd5c5;
  --mdb-table-striped-bg: #c6e1d0;
  --mdb-table-striped-color: #000;
  --mdb-table-active-bg: #bbd5c5;
  --mdb-table-active-color: #000;
  --mdb-table-hover-bg: #c0dbcb;
  --mdb-table-hover-color: #000;
}
.table-info,
.table-success {
  color: var(--mdb-table-color);
  border-color: var(--mdb-table-border-color);
}
.table-info {
  --mdb-table-color: #000;
  --mdb-table-bg: #ddf0f6;
  --mdb-table-border-color: #c7d8dd;
  --mdb-table-striped-bg: #d2e4ea;
  --mdb-table-striped-color: #000;
  --mdb-table-active-bg: #c7d8dd;
  --mdb-table-active-color: #000;
  --mdb-table-hover-bg: #ccdee4;
  --mdb-table-hover-color: #000;
}
.table-warning {
  --mdb-table-color: #000;
  --mdb-table-bg: #faecd1;
  --mdb-table-border-color: #e1d4bc;
  --mdb-table-striped-bg: #eee0c7;
  --mdb-table-striped-color: #000;
  --mdb-table-active-bg: #e1d4bc;
  --mdb-table-active-color: #000;
  --mdb-table-hover-bg: #e7dac1;
  --mdb-table-hover-color: #000;
}
.table-danger,
.table-warning {
  color: var(--mdb-table-color);
  border-color: var(--mdb-table-border-color);
}
.table-danger {
  --mdb-table-color: #000;
  --mdb-table-bg: #f8dbe0;
  --mdb-table-border-color: #dfc5ca;
  --mdb-table-striped-bg: #ecd0d5;
  --mdb-table-striped-color: #000;
  --mdb-table-active-bg: #dfc5ca;
  --mdb-table-active-color: #000;
  --mdb-table-hover-bg: #e5cbcf;
  --mdb-table-hover-color: #000;
}
.table-light {
  --mdb-table-color: #000;
  --mdb-table-bg: #fbfbfb;
  --mdb-table-border-color: #e2e2e2;
  --mdb-table-striped-bg: #eee;
  --mdb-table-striped-color: #000;
  --mdb-table-active-bg: #e2e2e2;
  --mdb-table-active-color: #000;
  --mdb-table-hover-bg: #e8e8e8;
  --mdb-table-hover-color: #000;
}
.table-dark,
.table-light {
  color: var(--mdb-table-color);
  border-color: var(--mdb-table-border-color);
}
.table-dark {
  --mdb-table-color: #fff;
  --mdb-table-bg: #332d2d;
  --mdb-table-border-color: #474242;
  --mdb-table-striped-bg: #3d3838;
  --mdb-table-striped-color: #fff;
  --mdb-table-active-bg: #474242;
  --mdb-table-active-color: #fff;
  --mdb-table-hover-bg: #423d3d;
  --mdb-table-hover-color: #fff;
}
.table-hover > tbody > tr {
  transition: 0.5s;
}
.table-hover > tbody > tr:hover {
  --mdb-table-accent-bg: transparent;
  background-color: var(--mdb-table-hover-bg);
}
.table-group-divider {
  border-top: 2px solid;
  border-top-color: inherit;
}
.table-divider-color {
  border-top-color: var(--mdb-table-divider-color);
}
.btn {
  --mdb-btn-padding-top: 0.625rem;
  --mdb-btn-padding-bottom: 0.5rem;
  --mdb-btn-border-width: 0;
  --mdb-btn-border-color: none;
  --mdb-btn-border-radius: 0.25rem;
  --mdb-btn-box-shadow: 0 4px 9px -4px rgba(0, 0, 0, 0.35);
  --mdb-btn-hover-box-shadow: 0 8px 9px -4px rgba(0, 0, 0, 0.15),
    0 4px 18px 0 rgba(0, 0, 0, 0.1);
  --mdb-btn-focus-box-shadow: 0 8px 9px -4px rgba(0, 0, 0, 0.15),
    0 4px 18px 0 rgba(0, 0, 0, 0.1);
  --mdb-btn-active-box-shadow: 0 8px 9px -4px rgba(0, 0, 0, 0.15),
    0 4px 18px 0 rgba(0, 0, 0, 0.1);
  padding-top: var(--mdb-btn-padding-top);
  padding-bottom: var(--mdb-btn-padding-bottom);
  text-transform: uppercase;
  vertical-align: bottom;
  border: 0;
  border-radius: var(--mdb-btn-border-radius);
  box-shadow: var(--mdb-btn-box-shadow);
}
.btn:first-child:hover,
.btn:focus-visible,
.btn:hover,
:not(.btn-check) + .btn:hover {
  box-shadow: var(--mdb-btn-hover-box-shadow);
}
.btn-check:focus + .btn,
.btn-check:focus-visible + .btn,
.btn:focus {
  box-shadow: var(--mdb-btn-focus-box-shadow);
}
.btn-check:active + .btn,
.btn-check:checked + .btn,
.btn.active,
.btn.show,
.btn:active {
  box-shadow: var(--mdb-btn-active-box-shadow);
}
.btn-check:active + .btn:focus,
.btn-check:checked + .btn:focus,
.btn.active:focus,
.btn.show:focus,
.btn:active:focus {
  box-shadow: var(--mdb-btn-focus-box-shadow);
}
.btn.disabled,
.btn:disabled,
fieldset:disabled .btn {
  box-shadow: var(--mdb-btn-box-shadow);
}
[class*="btn-outline-"] {
  --mdb-btn-padding-top: 0.5rem;
  --mdb-btn-padding-bottom: 0.375rem;
  --mdb-btn-padding-x: 1.375rem;
  --mdb-btn-border-width: 2px;
  --mdb-btn-line-height: 1.5;
  padding: var(--mdb-btn-padding-top) var(--mdb-btn-padding-x)
    var(--mdb-btn-padding-bottom);
  border-width: var(--mdb-btn-border-width);
  border-style: solid;
  box-shadow: none;
}
.btn-check:active + [class*="btn-outline-"],
.btn-check:active + [class*="btn-outline-"]:focus,
.btn-check:checked + [class*="btn-outline-"],
.btn-check:checked + [class*="btn-outline-"]:focus,
.btn-check:focus + [class*="btn-outline-"],
.btn-check:focus-visible + [class*="btn-outline-"],
:not(.btn-check) + [class*="btn-outline-"]:hover,
[class*="btn-outline-"].active,
[class*="btn-outline-"].active:focus,
[class*="btn-outline-"].disabled,
[class*="btn-outline-"].show,
[class*="btn-outline-"].show:focus,
[class*="btn-outline-"]:active,
[class*="btn-outline-"]:active:focus,
[class*="btn-outline-"]:disabled,
[class*="btn-outline-"]:first-child:hover,
[class*="btn-outline-"]:focus,
[class*="btn-outline-"]:focus-visible,
[class*="btn-outline-"]:hover,
fieldset:disabled [class*="btn-outline-"] {
  box-shadow: none;
}
.btn-group-lg > [class*="btn-outline-"].btn,
[class*="btn-outline-"].btn-lg {
  --mdb-btn-padding-top: 0.625rem;
  --mdb-btn-padding-bottom: 0.5625rem;
  --mdb-btn-padding-x: 1.5625rem;
  --mdb-btn-font-size: 0.875rem;
  --mdb-btn-line-height: 1.6;
}
.btn-group-sm > [class*="btn-outline-"].btn,
[class*="btn-outline-"].btn-sm {
  --mdb-btn-padding-top: 0.25rem;
  --mdb-btn-padding-bottom: 0.1875rem;
  --mdb-btn-padding-x: 0.875rem;
  --mdb-btn-font-size: 0.75rem;
  --mdb-btn-line-height: 1.5;
}
.btn-secondary {
  box-shadow: none;
}
.btn-secondary:first-child:hover,
.btn-secondary:focus-visible,
.btn-secondary:hover,
:not(.btn-check) + .btn-secondary:hover {
  box-shadow: none !important;
}
.btn-check:active + .btn-secondary,
.btn-check:active + .btn-secondary:focus,
.btn-check:checked + .btn-secondary,
.btn-check:checked + .btn-secondary:focus,
.btn-check:focus + .btn-secondary,
.btn-check:focus-visible + .btn-secondary,
.btn-secondary.active,
.btn-secondary.active:focus,
.btn-secondary.disabled,
.btn-secondary.show,
.btn-secondary.show:focus,
.btn-secondary:active,
.btn-secondary:active:focus,
.btn-secondary:disabled,
.btn-secondary:focus,
fieldset:disabled .btn-secondary {
  box-shadow: none;
}
.btn-primary {
  --mdb-btn-bg: #3b71ca;
  --mdb-btn-color: #fff;
  --mdb-btn-box-shadow: 0 4px 9px -4px #3b71ca;
  --mdb-btn-hover-bg: #386bc0;
  --mdb-btn-hover-color: #fff;
  --mdb-btn-focus-bg: #386bc0;
  --mdb-btn-focus-color: #fff;
  --mdb-btn-active-bg: #3566b6;
  --mdb-btn-active-color: #fff;
}
.btn-primary:first-child:hover,
.btn-primary:focus-visible,
.btn-primary:hover,
:not(.btn-check) + .btn-primary:hover {
  box-shadow: 0 8px 9px -4px rgba(59, 113, 202, 0.3),
    0 4px 18px 0 rgba(59, 113, 202, 0.2);
}
.btn-check:focus + .btn-primary,
.btn-check:focus-visible + .btn-primary,
.btn-primary:focus {
  box-shadow: 0 8px 9px -4px rgba(59, 113, 202, 0.3),
    0 4px 18px 0 rgba(59, 113, 202, 0.2);
  background-color: #386bc0;
}
.btn-check:active + .btn-primary,
.btn-check:active + .btn-primary:focus,
.btn-check:checked + .btn-primary,
.btn-check:checked + .btn-primary:focus,
.btn-primary.active,
.btn-primary.active:focus,
.btn-primary.show,
.btn-primary.show:focus,
.btn-primary:active,
.btn-primary:active:focus {
  box-shadow: 0 8px 9px -4px rgba(59, 113, 202, 0.3),
    0 4px 18px 0 rgba(59, 113, 202, 0.2);
}
.btn-check:active + .btn-primary:hover,
.btn-check:checked + .btn-primary:hover,
.btn-primary.active:hover,
.btn-primary.show:hover,
.btn-primary:active:hover {
  background-color: #3566b6;
}
.btn-primary.disabled,
.btn-primary:disabled,
fieldset:disabled .btn-primary {
  box-shadow: 0 4px 9px -4px #3b71ca;
}
.btn-secondary {
  --mdb-btn-bg: #e3ebf7;
  --mdb-btn-color: #285192;
  --mdb-btn-box-shadow: 0 4px 9px -4px #e3ebf7;
  --mdb-btn-hover-bg: #d8dfeb;
  --mdb-btn-hover-color: #285192;
  --mdb-btn-focus-bg: #d8dfeb;
  --mdb-btn-focus-color: #285192;
  --mdb-btn-active-bg: #ccd4de;
  --mdb-btn-active-color: #285192;
}
.btn-secondary:first-child:hover,
.btn-secondary:focus-visible,
.btn-secondary:hover,
:not(.btn-check) + .btn-secondary:hover {
  box-shadow: 0 8px 9px -4px rgba(227, 235, 247, 0.3),
    0 4px 18px 0 rgba(227, 235, 247, 0.2);
}
.btn-check:focus + .btn-secondary,
.btn-check:focus-visible + .btn-secondary,
.btn-secondary:focus {
  box-shadow: 0 8px 9px -4px rgba(227, 235, 247, 0.3),
    0 4px 18px 0 rgba(227, 235, 247, 0.2);
  background-color: #d8dfeb;
}
.btn-check:active + .btn-secondary,
.btn-check:active + .btn-secondary:focus,
.btn-check:checked + .btn-secondary,
.btn-check:checked + .btn-secondary:focus,
.btn-secondary.active,
.btn-secondary.active:focus,
.btn-secondary.show,
.btn-secondary.show:focus,
.btn-secondary:active,
.btn-secondary:active:focus {
  box-shadow: 0 8px 9px -4px rgba(227, 235, 247, 0.3),
    0 4px 18px 0 rgba(227, 235, 247, 0.2);
}
.btn-check:active + .btn-secondary:hover,
.btn-check:checked + .btn-secondary:hover,
.btn-secondary.active:hover,
.btn-secondary.show:hover,
.btn-secondary:active:hover {
  background-color: #ccd4de;
}
.btn-secondary.disabled,
.btn-secondary:disabled,
fieldset:disabled .btn-secondary {
  box-shadow: 0 4px 9px -4px #e3ebf7;
}
.btn-success {
  --mdb-btn-bg: #14a44d;
  --mdb-btn-color: #fff;
  --mdb-btn-box-shadow: 0 4px 9px -4px #14a44d;
  --mdb-btn-hover-bg: #139c49;
  --mdb-btn-hover-color: #fff;
  --mdb-btn-focus-bg: #139c49;
  --mdb-btn-focus-color: #fff;
  --mdb-btn-active-bg: #129445;
  --mdb-btn-active-color: #fff;
}
.btn-success:first-child:hover,
.btn-success:focus-visible,
.btn-success:hover,
:not(.btn-check) + .btn-success:hover {
  box-shadow: 0 8px 9px -4px rgba(20, 164, 77, 0.3),
    0 4px 18px 0 rgba(20, 164, 77, 0.2);
}
.btn-check:focus + .btn-success,
.btn-check:focus-visible + .btn-success,
.btn-success:focus {
  box-shadow: 0 8px 9px -4px rgba(20, 164, 77, 0.3),
    0 4px 18px 0 rgba(20, 164, 77, 0.2);
  background-color: #139c49;
}
.btn-check:active + .btn-success,
.btn-check:active + .btn-success:focus,
.btn-check:checked + .btn-success,
.btn-check:checked + .btn-success:focus,
.btn-success.active,
.btn-success.active:focus,
.btn-success.show,
.btn-success.show:focus,
.btn-success:active,
.btn-success:active:focus {
  box-shadow: 0 8px 9px -4px rgba(20, 164, 77, 0.3),
    0 4px 18px 0 rgba(20, 164, 77, 0.2);
}
.btn-check:active + .btn-success:hover,
.btn-check:checked + .btn-success:hover,
.btn-success.active:hover,
.btn-success.show:hover,
.btn-success:active:hover {
  background-color: #129445;
}
.btn-success.disabled,
.btn-success:disabled,
fieldset:disabled .btn-success {
  box-shadow: 0 4px 9px -4px #14a44d;
}
.btn-danger {
  --mdb-btn-bg: #dc4c64;
  --mdb-btn-color: #fff;
  --mdb-btn-box-shadow: 0 4px 9px -4px #dc4c64;
  --mdb-btn-hover-bg: #d1485f;
  --mdb-btn-hover-color: #fff;
  --mdb-btn-focus-bg: #d1485f;
  --mdb-btn-focus-color: #fff;
  --mdb-btn-active-bg: #c6445a;
  --mdb-btn-active-color: #fff;
}
.btn-danger:first-child:hover,
.btn-danger:focus-visible,
.btn-danger:hover,
:not(.btn-check) + .btn-danger:hover {
  box-shadow: 0 8px 9px -4px rgba(220, 76, 100, 0.3),
    0 4px 18px 0 rgba(220, 76, 100, 0.2);
}
.btn-check:focus + .btn-danger,
.btn-check:focus-visible + .btn-danger,
.btn-danger:focus {
  box-shadow: 0 8px 9px -4px rgba(220, 76, 100, 0.3),
    0 4px 18px 0 rgba(220, 76, 100, 0.2);
  background-color: #d1485f;
}
.btn-check:active + .btn-danger,
.btn-check:active + .btn-danger:focus,
.btn-check:checked + .btn-danger,
.btn-check:checked + .btn-danger:focus,
.btn-danger.active,
.btn-danger.active:focus,
.btn-danger.show,
.btn-danger.show:focus,
.btn-danger:active,
.btn-danger:active:focus {
  box-shadow: 0 8px 9px -4px rgba(220, 76, 100, 0.3),
    0 4px 18px 0 rgba(220, 76, 100, 0.2);
}
.btn-check:active + .btn-danger:hover,
.btn-check:checked + .btn-danger:hover,
.btn-danger.active:hover,
.btn-danger.show:hover,
.btn-danger:active:hover {
  background-color: #c6445a;
}
.btn-danger.disabled,
.btn-danger:disabled,
fieldset:disabled .btn-danger {
  box-shadow: 0 4px 9px -4px #dc4c64;
}
.btn-warning {
  --mdb-btn-bg: #e4a11b;
  --mdb-btn-color: #fff;
  --mdb-btn-box-shadow: 0 4px 9px -4px #e4a11b;
  --mdb-btn-hover-bg: #d9991a;
  --mdb-btn-hover-color: #fff;
  --mdb-btn-focus-bg: #d9991a;
  --mdb-btn-focus-color: #fff;
  --mdb-btn-active-bg: #cd9118;
  --mdb-btn-active-color: #fff;
}
.btn-warning:first-child:hover,
.btn-warning:focus-visible,
.btn-warning:hover,
:not(.btn-check) + .btn-warning:hover {
  box-shadow: 0 8px 9px -4px rgba(228, 161, 27, 0.3),
    0 4px 18px 0 rgba(228, 161, 27, 0.2);
}
.btn-check:focus + .btn-warning,
.btn-check:focus-visible + .btn-warning,
.btn-warning:focus {
  box-shadow: 0 8px 9px -4px rgba(228, 161, 27, 0.3),
    0 4px 18px 0 rgba(228, 161, 27, 0.2);
  background-color: #d9991a;
}
.btn-check:active + .btn-warning,
.btn-check:active + .btn-warning:focus,
.btn-check:checked + .btn-warning,
.btn-check:checked + .btn-warning:focus,
.btn-warning.active,
.btn-warning.active:focus,
.btn-warning.show,
.btn-warning.show:focus,
.btn-warning:active,
.btn-warning:active:focus {
  box-shadow: 0 8px 9px -4px rgba(228, 161, 27, 0.3),
    0 4px 18px 0 rgba(228, 161, 27, 0.2);
}
.btn-check:active + .btn-warning:hover,
.btn-check:checked + .btn-warning:hover,
.btn-warning.active:hover,
.btn-warning.show:hover,
.btn-warning:active:hover {
  background-color: #cd9118;
}
.btn-warning.disabled,
.btn-warning:disabled,
fieldset:disabled .btn-warning {
  box-shadow: 0 4px 9px -4px #e4a11b;
}
.btn-info {
  --mdb-btn-bg: #54b4d3;
  --mdb-btn-color: #fff;
  --mdb-btn-box-shadow: 0 4px 9px -4px #54b4d3;
  --mdb-btn-hover-bg: #50abc8;
  --mdb-btn-hover-color: #fff;
  --mdb-btn-focus-bg: #50abc8;
  --mdb-btn-focus-color: #fff;
  --mdb-btn-active-bg: #4ca2be;
  --mdb-btn-active-color: #fff;
}
.btn-check:focus + .btn-info,
.btn-check:focus-visible + .btn-info,
.btn-info:first-child:hover,
.btn-info:focus,
.btn-info:focus-visible,
.btn-info:hover,
:not(.btn-check) + .btn-info:hover {
  box-shadow: 0 8px 9px -4px rgba(84, 180, 211, 0.3),
    0 4px 18px 0 rgba(84, 180, 211, 0.2);
}
.btn-check:focus + .btn-info,
.btn-check:focus-visible + .btn-info,
.btn-info:focus {
  background-color: #50abc8;
}
.btn-check:active + .btn-info,
.btn-check:active + .btn-info:focus,
.btn-check:checked + .btn-info,
.btn-check:checked + .btn-info:focus,
.btn-info.active,
.btn-info.active:focus,
.btn-info.show,
.btn-info.show:focus,
.btn-info:active,
.btn-info:active:focus {
  box-shadow: 0 8px 9px -4px rgba(84, 180, 211, 0.3),
    0 4px 18px 0 rgba(84, 180, 211, 0.2);
}
.btn-check:active + .btn-info:hover,
.btn-check:checked + .btn-info:hover,
.btn-info.active:hover,
.btn-info.show:hover,
.btn-info:active:hover {
  background-color: #4ca2be;
}
.btn-info.disabled,
.btn-info:disabled,
fieldset:disabled .btn-info {
  box-shadow: 0 4px 9px -4px #54b4d3;
}
.btn-light {
  --mdb-btn-bg: #fbfbfb;
  --mdb-btn-color: #4f4f4f;
  --mdb-btn-box-shadow: 0 4px 9px -4px #fbfbfb;
  --mdb-btn-hover-bg: #eee;
  --mdb-btn-hover-color: #4f4f4f;
  --mdb-btn-focus-bg: #eee;
  --mdb-btn-focus-color: #4f4f4f;
  --mdb-btn-active-bg: #e2e2e2;
  --mdb-btn-active-color: #4f4f4f;
}
.btn-light:first-child:hover,
.btn-light:focus-visible,
.btn-light:hover,
:not(.btn-check) + .btn-light:hover {
  box-shadow: 0 8px 9px -4px hsla(0, 0%, 98.4%, 0.3),
    0 4px 18px 0 hsla(0, 0%, 98.4%, 0.2);
}
.btn-check:focus + .btn-light,
.btn-check:focus-visible + .btn-light,
.btn-light:focus {
  box-shadow: 0 8px 9px -4px hsla(0, 0%, 98.4%, 0.3),
    0 4px 18px 0 hsla(0, 0%, 98.4%, 0.2);
  background-color: #eee;
}
.btn-check:active + .btn-light,
.btn-check:active + .btn-light:focus,
.btn-check:checked + .btn-light,
.btn-check:checked + .btn-light:focus,
.btn-light.active,
.btn-light.active:focus,
.btn-light.show,
.btn-light.show:focus,
.btn-light:active,
.btn-light:active:focus {
  box-shadow: 0 8px 9px -4px hsla(0, 0%, 98.4%, 0.3),
    0 4px 18px 0 hsla(0, 0%, 98.4%, 0.2);
}
.btn-check:active + .btn-light:hover,
.btn-check:checked + .btn-light:hover,
.btn-light.active:hover,
.btn-light.show:hover,
.btn-light:active:hover {
  background-color: #e2e2e2;
}
.btn-light.disabled,
.btn-light:disabled,
fieldset:disabled .btn-light {
  box-shadow: 0 4px 9px -4px #fbfbfb;
}
.btn-dark {
  --mdb-btn-bg: #332d2d;
  --mdb-btn-color: #fff;
  --mdb-btn-box-shadow: 0 4px 9px -4px #332d2d;
  --mdb-btn-hover-bg: #302b2b;
  --mdb-btn-hover-color: #fff;
  --mdb-btn-focus-bg: #302b2b;
  --mdb-btn-focus-color: #fff;
  --mdb-btn-active-bg: #2e2929;
  --mdb-btn-active-color: #fff;
}
.btn-dark:first-child:hover,
.btn-dark:focus-visible,
.btn-dark:hover,
:not(.btn-check) + .btn-dark:hover {
  box-shadow: 0 8px 9px -4px rgba(51, 45, 45, 0.3),
    0 4px 18px 0 rgba(51, 45, 45, 0.2);
}
.btn-check:focus + .btn-dark,
.btn-check:focus-visible + .btn-dark,
.btn-dark:focus {
  box-shadow: 0 8px 9px -4px rgba(51, 45, 45, 0.3),
    0 4px 18px 0 rgba(51, 45, 45, 0.2);
  background-color: #302b2b;
}
.btn-check:active + .btn-dark,
.btn-check:active + .btn-dark:focus,
.btn-check:checked + .btn-dark,
.btn-check:checked + .btn-dark:focus,
.btn-dark.active,
.btn-dark.active:focus,
.btn-dark.show,
.btn-dark.show:focus,
.btn-dark:active,
.btn-dark:active:focus {
  box-shadow: 0 8px 9px -4px rgba(51, 45, 45, 0.3),
    0 4px 18px 0 rgba(51, 45, 45, 0.2);
}
.btn-check:active + .btn-dark:hover,
.btn-check:checked + .btn-dark:hover,
.btn-dark.active:hover,
.btn-dark.show:hover,
.btn-dark:active:hover {
  background-color: #2e2929;
}
.btn-dark.disabled,
.btn-dark:disabled,
fieldset:disabled .btn-dark {
  box-shadow: 0 4px 9px -4px #332d2d;
}
.btn-white {
  --mdb-btn-bg: #fff;
  --mdb-btn-color: #000;
  --mdb-btn-box-shadow: 0 4px 9px -4px #fff;
  --mdb-btn-hover-bg: #f2f2f2;
  --mdb-btn-hover-color: #000;
  --mdb-btn-focus-bg: #f2f2f2;
  --mdb-btn-focus-color: #000;
  --mdb-btn-active-bg: #e6e6e6;
  --mdb-btn-active-color: #000;
}
.btn-white:first-child:hover,
.btn-white:focus-visible,
.btn-white:hover,
:not(.btn-check) + .btn-white:hover {
  box-shadow: 0 8px 9px -4px hsla(0, 0%, 100%, 0.3),
    0 4px 18px 0 hsla(0, 0%, 100%, 0.2);
}
.btn-check:focus + .btn-white,
.btn-check:focus-visible + .btn-white,
.btn-white:focus {
  box-shadow: 0 8px 9px -4px hsla(0, 0%, 100%, 0.3),
    0 4px 18px 0 hsla(0, 0%, 100%, 0.2);
  background-color: #f2f2f2;
}
.btn-check:active + .btn-white,
.btn-check:active + .btn-white:focus,
.btn-check:checked + .btn-white,
.btn-check:checked + .btn-white:focus,
.btn-white.active,
.btn-white.active:focus,
.btn-white.show,
.btn-white.show:focus,
.btn-white:active,
.btn-white:active:focus {
  box-shadow: 0 8px 9px -4px hsla(0, 0%, 100%, 0.3),
    0 4px 18px 0 hsla(0, 0%, 100%, 0.2);
}
.btn-check:active + .btn-white:hover,
.btn-check:checked + .btn-white:hover,
.btn-white.active:hover,
.btn-white.show:hover,
.btn-white:active:hover {
  background-color: #e6e6e6;
}
.btn-white.disabled,
.btn-white:disabled,
fieldset:disabled .btn-white {
  box-shadow: 0 4px 9px -4px #fff;
}
.btn-black {
  --mdb-btn-bg: #000;
  --mdb-btn-color: #fff;
  --mdb-btn-box-shadow: 0 4px 9px -4px #000;
  --mdb-btn-hover-bg: #000;
  --mdb-btn-hover-color: #fff;
  --mdb-btn-focus-bg: #000;
  --mdb-btn-focus-color: #fff;
  --mdb-btn-active-bg: #000;
  --mdb-btn-active-color: #fff;
}
.btn-black:first-child:hover,
.btn-black:focus-visible,
.btn-black:hover,
:not(.btn-check) + .btn-black:hover {
  box-shadow: 0 8px 9px -4px rgba(0, 0, 0, 0.3), 0 4px 18px 0 rgba(0, 0, 0, 0.2);
}
.btn-black:focus,
.btn-check:focus + .btn-black,
.btn-check:focus-visible + .btn-black {
  box-shadow: 0 8px 9px -4px rgba(0, 0, 0, 0.3), 0 4px 18px 0 rgba(0, 0, 0, 0.2);
  background-color: #000;
}
.btn-black.active,
.btn-black.active:focus,
.btn-black.show,
.btn-black.show:focus,
.btn-black:active,
.btn-black:active:focus,
.btn-check:active + .btn-black,
.btn-check:active + .btn-black:focus,
.btn-check:checked + .btn-black,
.btn-check:checked + .btn-black:focus {
  box-shadow: 0 8px 9px -4px rgba(0, 0, 0, 0.3), 0 4px 18px 0 rgba(0, 0, 0, 0.2);
}
.btn-black.active:hover,
.btn-black.show:hover,
.btn-black:active:hover,
.btn-check:active + .btn-black:hover,
.btn-check:checked + .btn-black:hover {
  background-color: #000;
}
.btn-black.disabled,
.btn-black:disabled,
fieldset:disabled .btn-black {
  box-shadow: 0 4px 9px -4px #000;
}
.btn-outline-primary {
  --mdb-btn-bg: transparent;
  --mdb-btn-color: #3b71ca;
  --mdb-btn-hover-bg: transparent;
  --mdb-btn-hover-color: #386bc0;
  --mdb-btn-focus-bg: transparent;
  --mdb-btn-focus-color: #386bc0;
  --mdb-btn-active-bg: transparent;
  --mdb-btn-active-color: #3566b6;
  border-color: #3b71ca;
}
.btn-check:focus + .btn-outline-primary,
.btn-check:focus-visible + .btn-outline-primary,
.btn-outline-primary:first-child:hover,
.btn-outline-primary:focus,
.btn-outline-primary:focus-visible,
.btn-outline-primary:hover,
:not(.btn-check) + .btn-outline-primary:hover {
  border-color: #386bc0;
}
.btn-check:active + .btn-outline-primary,
.btn-check:checked + .btn-outline-primary,
.btn-outline-primary.active,
.btn-outline-primary.show,
.btn-outline-primary:active {
  border-color: #3566b6;
}
.btn-check:active + .btn-outline-primary:focus,
.btn-check:checked + .btn-outline-primary:focus,
.btn-outline-primary.active:focus,
.btn-outline-primary.show:focus,
.btn-outline-primary:active:focus {
  border-color: #386bc0;
}
.btn-outline-primary.disabled,
.btn-outline-primary:disabled,
fieldset:disabled .btn-outline-primary {
  border-color: #3b71ca;
}
.btn-outline-secondary {
  --mdb-btn-bg: transparent;
  --mdb-btn-color: #285192;
  --mdb-btn-hover-bg: transparent;
  --mdb-btn-hover-color: #264d8b;
  --mdb-btn-focus-bg: transparent;
  --mdb-btn-focus-color: #264d8b;
  --mdb-btn-active-bg: transparent;
  --mdb-btn-active-color: #244983;
  border-color: #e3ebf7;
}
.btn-check:focus + .btn-outline-secondary,
.btn-check:focus-visible + .btn-outline-secondary,
.btn-outline-secondary:first-child:hover,
.btn-outline-secondary:focus,
.btn-outline-secondary:focus-visible,
.btn-outline-secondary:hover,
:not(.btn-check) + .btn-outline-secondary:hover {
  border-color: #d8dfeb;
}
.btn-check:active + .btn-outline-secondary,
.btn-check:checked + .btn-outline-secondary,
.btn-outline-secondary.active,
.btn-outline-secondary.show,
.btn-outline-secondary:active {
  border-color: #ccd4de;
}
.btn-check:active + .btn-outline-secondary:focus,
.btn-check:checked + .btn-outline-secondary:focus,
.btn-outline-secondary.active:focus,
.btn-outline-secondary.show:focus,
.btn-outline-secondary:active:focus {
  border-color: #d8dfeb;
}
.btn-outline-secondary.disabled,
.btn-outline-secondary:disabled,
fieldset:disabled .btn-outline-secondary {
  border-color: #e3ebf7;
}
.btn-outline-success {
  --mdb-btn-bg: transparent;
  --mdb-btn-color: #14a44d;
  --mdb-btn-hover-bg: transparent;
  --mdb-btn-hover-color: #139c49;
  --mdb-btn-focus-bg: transparent;
  --mdb-btn-focus-color: #139c49;
  --mdb-btn-active-bg: transparent;
  --mdb-btn-active-color: #129445;
  border-color: #14a44d;
}
.btn-check:focus + .btn-outline-success,
.btn-check:focus-visible + .btn-outline-success,
.btn-outline-success:first-child:hover,
.btn-outline-success:focus,
.btn-outline-success:focus-visible,
.btn-outline-success:hover,
:not(.btn-check) + .btn-outline-success:hover {
  border-color: #139c49;
}
.btn-check:active + .btn-outline-success,
.btn-check:checked + .btn-outline-success,
.btn-outline-success.active,
.btn-outline-success.show,
.btn-outline-success:active {
  border-color: #129445;
}
.btn-check:active + .btn-outline-success:focus,
.btn-check:checked + .btn-outline-success:focus,
.btn-outline-success.active:focus,
.btn-outline-success.show:focus,
.btn-outline-success:active:focus {
  border-color: #139c49;
}
.btn-outline-success.disabled,
.btn-outline-success:disabled,
fieldset:disabled .btn-outline-success {
  border-color: #14a44d;
}
.btn-outline-danger {
  --mdb-btn-bg: transparent;
  --mdb-btn-color: #dc4c64;
  --mdb-btn-hover-bg: transparent;
  --mdb-btn-hover-color: #d1485f;
  --mdb-btn-focus-bg: transparent;
  --mdb-btn-focus-color: #d1485f;
  --mdb-btn-active-bg: transparent;
  --mdb-btn-active-color: #c6445a;
  border-color: #dc4c64;
}
.btn-check:focus + .btn-outline-danger,
.btn-check:focus-visible + .btn-outline-danger,
.btn-outline-danger:first-child:hover,
.btn-outline-danger:focus,
.btn-outline-danger:focus-visible,
.btn-outline-danger:hover,
:not(.btn-check) + .btn-outline-danger:hover {
  border-color: #d1485f;
}
.btn-check:active + .btn-outline-danger,
.btn-check:checked + .btn-outline-danger,
.btn-outline-danger.active,
.btn-outline-danger.show,
.btn-outline-danger:active {
  border-color: #c6445a;
}
.btn-check:active + .btn-outline-danger:focus,
.btn-check:checked + .btn-outline-danger:focus,
.btn-outline-danger.active:focus,
.btn-outline-danger.show:focus,
.btn-outline-danger:active:focus {
  border-color: #d1485f;
}
.btn-outline-danger.disabled,
.btn-outline-danger:disabled,
fieldset:disabled .btn-outline-danger {
  border-color: #dc4c64;
}
.btn-outline-warning {
  --mdb-btn-bg: transparent;
  --mdb-btn-color: #e4a11b;
  --mdb-btn-hover-bg: transparent;
  --mdb-btn-hover-color: #d9991a;
  --mdb-btn-focus-bg: transparent;
  --mdb-btn-focus-color: #d9991a;
  --mdb-btn-active-bg: transparent;
  --mdb-btn-active-color: #cd9118;
  border-color: #e4a11b;
}
.btn-check:focus + .btn-outline-warning,
.btn-check:focus-visible + .btn-outline-warning,
.btn-outline-warning:first-child:hover,
.btn-outline-warning:focus,
.btn-outline-warning:focus-visible,
.btn-outline-warning:hover,
:not(.btn-check) + .btn-outline-warning:hover {
  border-color: #d9991a;
}
.btn-check:active + .btn-outline-warning,
.btn-check:checked + .btn-outline-warning,
.btn-outline-warning.active,
.btn-outline-warning.show,
.btn-outline-warning:active {
  border-color: #cd9118;
}
.btn-check:active + .btn-outline-warning:focus,
.btn-check:checked + .btn-outline-warning:focus,
.btn-outline-warning.active:focus,
.btn-outline-warning.show:focus,
.btn-outline-warning:active:focus {
  border-color: #d9991a;
}
.btn-outline-warning.disabled,
.btn-outline-warning:disabled,
fieldset:disabled .btn-outline-warning {
  border-color: #e4a11b;
}
.btn-outline-info {
  --mdb-btn-bg: transparent;
  --mdb-btn-color: #54b4d3;
  --mdb-btn-hover-bg: transparent;
  --mdb-btn-hover-color: #50abc8;
  --mdb-btn-focus-bg: transparent;
  --mdb-btn-focus-color: #50abc8;
  --mdb-btn-active-bg: transparent;
  --mdb-btn-active-color: #4ca2be;
  border-color: #54b4d3;
}
.btn-check:focus + .btn-outline-info,
.btn-check:focus-visible + .btn-outline-info,
.btn-outline-info:first-child:hover,
.btn-outline-info:focus,
.btn-outline-info:focus-visible,
.btn-outline-info:hover,
:not(.btn-check) + .btn-outline-info:hover {
  border-color: #50abc8;
}
.btn-check:active + .btn-outline-info,
.btn-check:checked + .btn-outline-info,
.btn-outline-info.active,
.btn-outline-info.show,
.btn-outline-info:active {
  border-color: #4ca2be;
}
.btn-check:active + .btn-outline-info:focus,
.btn-check:checked + .btn-outline-info:focus,
.btn-outline-info.active:focus,
.btn-outline-info.show:focus,
.btn-outline-info:active:focus {
  border-color: #50abc8;
}
.btn-outline-info.disabled,
.btn-outline-info:disabled,
fieldset:disabled .btn-outline-info {
  border-color: #54b4d3;
}
.btn-outline-light {
  --mdb-btn-bg: transparent;
  --mdb-btn-color: #fbfbfb;
  --mdb-btn-hover-bg: transparent;
  --mdb-btn-hover-color: #eee;
  --mdb-btn-focus-bg: transparent;
  --mdb-btn-focus-color: #eee;
  --mdb-btn-active-bg: transparent;
  --mdb-btn-active-color: #e2e2e2;
  border-color: #fbfbfb;
}
.btn-check:focus + .btn-outline-light,
.btn-check:focus-visible + .btn-outline-light,
.btn-outline-light:first-child:hover,
.btn-outline-light:focus,
.btn-outline-light:focus-visible,
.btn-outline-light:hover,
:not(.btn-check) + .btn-outline-light:hover {
  border-color: #eee;
}
.btn-check:active + .btn-outline-light,
.btn-check:checked + .btn-outline-light,
.btn-outline-light.active,
.btn-outline-light.show,
.btn-outline-light:active {
  border-color: #e2e2e2;
}
.btn-check:active + .btn-outline-light:focus,
.btn-check:checked + .btn-outline-light:focus,
.btn-outline-light.active:focus,
.btn-outline-light.show:focus,
.btn-outline-light:active:focus {
  border-color: #eee;
}
.btn-outline-light.disabled,
.btn-outline-light:disabled,
fieldset:disabled .btn-outline-light {
  border-color: #fbfbfb;
}
.btn-outline-dark {
  --mdb-btn-bg: transparent;
  --mdb-btn-color: #332d2d;
  --mdb-btn-hover-bg: transparent;
  --mdb-btn-hover-color: #302b2b;
  --mdb-btn-focus-bg: transparent;
  --mdb-btn-focus-color: #302b2b;
  --mdb-btn-active-bg: transparent;
  --mdb-btn-active-color: #2e2929;
  border-color: #332d2d;
}
.btn-check:focus + .btn-outline-dark,
.btn-check:focus-visible + .btn-outline-dark,
.btn-outline-dark:first-child:hover,
.btn-outline-dark:focus,
.btn-outline-dark:focus-visible,
.btn-outline-dark:hover,
:not(.btn-check) + .btn-outline-dark:hover {
  border-color: #302b2b;
}
.btn-check:active + .btn-outline-dark,
.btn-check:checked + .btn-outline-dark,
.btn-outline-dark.active,
.btn-outline-dark.show,
.btn-outline-dark:active {
  border-color: #2e2929;
}
.btn-check:active + .btn-outline-dark:focus,
.btn-check:checked + .btn-outline-dark:focus,
.btn-outline-dark.active:focus,
.btn-outline-dark.show:focus,
.btn-outline-dark:active:focus {
  border-color: #302b2b;
}
.btn-outline-dark.disabled,
.btn-outline-dark:disabled,
fieldset:disabled .btn-outline-dark {
  border-color: #332d2d;
}
.btn-outline-white {
  --mdb-btn-bg: transparent;
  --mdb-btn-color: #fff;
  --mdb-btn-hover-bg: transparent;
  --mdb-btn-hover-color: #f2f2f2;
  --mdb-btn-focus-bg: transparent;
  --mdb-btn-focus-color: #f2f2f2;
  --mdb-btn-active-bg: transparent;
  --mdb-btn-active-color: #e6e6e6;
  border-color: #fff;
}
.btn-check:focus + .btn-outline-white,
.btn-check:focus-visible + .btn-outline-white,
.btn-outline-white:first-child:hover,
.btn-outline-white:focus,
.btn-outline-white:focus-visible,
.btn-outline-white:hover,
:not(.btn-check) + .btn-outline-white:hover {
  border-color: #f2f2f2;
}
.btn-check:active + .btn-outline-white,
.btn-check:checked + .btn-outline-white,
.btn-outline-white.active,
.btn-outline-white.show,
.btn-outline-white:active {
  border-color: #e6e6e6;
}
.btn-check:active + .btn-outline-white:focus,
.btn-check:checked + .btn-outline-white:focus,
.btn-outline-white.active:focus,
.btn-outline-white.show:focus,
.btn-outline-white:active:focus {
  border-color: #f2f2f2;
}
.btn-outline-white.disabled,
.btn-outline-white:disabled,
fieldset:disabled .btn-outline-white {
  border-color: #fff;
}
.btn-outline-black {
  --mdb-btn-bg: transparent;
  --mdb-btn-color: #000;
  --mdb-btn-hover-bg: transparent;
  --mdb-btn-hover-color: #000;
  --mdb-btn-focus-bg: transparent;
  --mdb-btn-focus-color: #000;
  --mdb-btn-active-bg: transparent;
  --mdb-btn-active-color: #000;
  border-color: #000;
}
.btn-check:active + .btn-outline-black,
.btn-check:active + .btn-outline-black:focus,
.btn-check:checked + .btn-outline-black,
.btn-check:checked + .btn-outline-black:focus,
.btn-check:focus + .btn-outline-black,
.btn-check:focus-visible + .btn-outline-black,
.btn-outline-black.active,
.btn-outline-black.active:focus,
.btn-outline-black.disabled,
.btn-outline-black.show,
.btn-outline-black.show:focus,
.btn-outline-black:active,
.btn-outline-black:active:focus,
.btn-outline-black:disabled,
.btn-outline-black:first-child:hover,
.btn-outline-black:focus,
.btn-outline-black:focus-visible,
.btn-outline-black:hover,
:not(.btn-check) + .btn-outline-black:hover,
fieldset:disabled .btn-outline-black {
  border-color: #000;
}
.btn-link {
  --mdb-btn-font-weight: 500;
  --mdb-btn-color: #3b71ca;
  --mdb-btn-hover-color: #386bc0;
  --mdb-btn-hover-bg: #f5f5f5;
  --mdb-btn-focus-color: #3566b6;
  --mdb-btn-active-color: #3260ac;
  --mdb-btn-disabled-color: #9e9e9e;
  --mdb-btn-box-shadow: none;
}
.btn-link,
.btn-link:first-child:hover,
.btn-link:focus-visible,
.btn-link:hover,
:not(.btn-check) + .btn-link:hover {
  text-decoration: none;
  box-shadow: var(--mdb-btn-box-shadow);
}
.btn-check:focus + .btn-link,
.btn-check:focus-visible + .btn-link,
.btn-link:focus {
  color: var(--mdb-btn-focus-color);
  box-shadow: var(--mdb-btn-box-shadow);
}
.btn-check:active + .btn-link,
.btn-check:checked + .btn-link,
.btn-link.active,
.btn-link.show,
.btn-link:active {
  color: var(--mdb-btn-active-color);
  box-shadow: var(--mdb-btn-box-shadow);
}
.btn-check:active + .btn-link:focus,
.btn-check:checked + .btn-link:focus,
.btn-link.active:focus,
.btn-link.show:focus,
.btn-link:active:focus {
  color: var(--mdb-btn-focus-color);
  box-shadow: var(--mdb-btn-box-shadow);
}
.btn-link.disabled,
.btn-link:disabled,
fieldset:disabled .btn-link {
  box-shadow: var(--mdb-btn-box-shadow);
}
.btn-tertiary {
  --mdb-btn-font-weight: 500;
  --mdb-btn-color: #3b71ca;
  --mdb-btn-hover-color: #386bc0;
  --mdb-btn-hover-bg: transparent;
  --mdb-btn-focus-color: #3566b6;
  --mdb-btn-active-color: #3260ac;
  --mdb-btn-disabled-color: #9e9e9e;
  --mdb-btn-box-shadow: none;
  padding-left: 0;
  padding-right: 0;
}
.btn-tertiary,
.btn-tertiary:first-child:hover,
.btn-tertiary:focus-visible,
.btn-tertiary:hover,
:not(.btn-check) + .btn-tertiary:hover {
  text-decoration: none;
  box-shadow: var(--mdb-btn-box-shadow);
}
.btn-check:focus + .btn-tertiary,
.btn-check:focus-visible + .btn-tertiary,
.btn-tertiary:focus {
  color: var(--mdb-btn-focus-color);
  box-shadow: var(--mdb-btn-box-shadow);
}
.btn-check:active + .btn-tertiary,
.btn-check:checked + .btn-tertiary,
.btn-tertiary.active,
.btn-tertiary.show,
.btn-tertiary:active {
  color: var(--mdb-btn-active-color);
  box-shadow: var(--mdb-btn-box-shadow);
}
.btn-check:active + .btn-tertiary:focus,
.btn-check:checked + .btn-tertiary:focus,
.btn-tertiary.active:focus,
.btn-tertiary.show:focus,
.btn-tertiary:active:focus {
  color: var(--mdb-btn-focus-color);
  box-shadow: var(--mdb-btn-box-shadow);
}
.btn-tertiary.disabled,
.btn-tertiary:disabled,
fieldset:disabled .btn-tertiary {
  box-shadow: var(--mdb-btn-box-shadow);
}
.btn-group-lg > .btn,
.btn-lg {
  --mdb-btn-padding-top: 0.75rem;
  --mdb-btn-padding-bottom: 0.6875rem;
  --mdb-btn-padding-x: 1.6875rem;
  --mdb-btn-font-size: 0.875rem;
  --mdb-btn-line-height: 1.6;
}
.btn-group-sm > .btn,
.btn-sm {
  --mdb-btn-padding-top: 0.375rem;
  --mdb-btn-padding-bottom: 0.3125rem;
  --mdb-btn-padding-x: 1rem;
  --mdb-btn-font-size: 0.75rem;
  --mdb-btn-line-height: 1.5;
}
.btn-rounded {
  --mdb-btn-border-radius: 10rem;
  border-radius: var(--mdb-btn-border-radius);
}
.btn-floating,
[class*="btn-outline-"].btn-floating {
  --mdb-btn-border-radius: 50%;
  border-radius: var(--mdb-btn-border-radius);
  padding: 0;
  position: relative;
}
.btn-floating {
  --mdb-btn-width: 2.3125rem;
  --mdb-btn-height: 2.3125rem;
  --mdb-btn-icon-width: 2.3125rem;
  --mdb-btn-icon-line-height: 2.3125rem;
  --mdb-btn-width-lg: 2.8125rem;
  --mdb-btn-height-lg: 2.8125rem;
  --mdb-btn-icon-width-lg: 2.8125rem;
  --mdb-btn-icon-line-height-lg: 2.8125rem;
  --mdb-btn-width-sm: 1.8125rem;
  --mdb-btn-height-sm: 1.8125rem;
  --mdb-btn-icon-width-sm: 1.8125rem;
  --mdb-btn-icon-line-height-sm: 1.8125rem;
  width: var(--mdb-btn-width);
  height: var(--mdb-btn-height);
}
.btn-floating .fab,
.btn-floating .far,
.btn-floating .fas {
  width: var(--mdb-btn-icon-width);
  line-height: var(--mdb-btn-icon-line-height);
}
.btn-floating.btn-lg,
.btn-group-lg > .btn-floating.btn {
  width: var(--mdb-btn-width-lg);
  height: var(--mdb-btn-height-lg);
}
.btn-floating.btn-lg .fab,
.btn-floating.btn-lg .far,
.btn-floating.btn-lg .fas,
.btn-group-lg > .btn-floating.btn .fab,
.btn-group-lg > .btn-floating.btn .far,
.btn-group-lg > .btn-floating.btn .fas {
  width: var(--mdb-btn-icon-width-lg);
  line-height: var(--mdb-btn-icon-line-height-lg);
}
.btn-floating.btn-sm,
.btn-group-sm > .btn-floating.btn {
  width: var(--mdb-btn-width-sm);
  height: var(--mdb-btn-height-sm);
}
.btn-floating.btn-sm .fab,
.btn-floating.btn-sm .far,
.btn-floating.btn-sm .fas,
.btn-group-sm > .btn-floating.btn .fab,
.btn-group-sm > .btn-floating.btn .far,
.btn-group-sm > .btn-floating.btn .fas {
  width: var(--mdb-btn-icon-width-sm);
  line-height: var(--mdb-btn-icon-line-height-sm);
}
[class*="btn-outline-"].btn-floating {
  --mdb-btn-icon-width: 2.0625rem;
  --mdb-btn-icon-width-lg: 2.5625rem;
  --mdb-btn-icon-width-sm: 1.5625rem;
  --mdb-btn-icon-line-height: 2.0625rem;
  --mdb-btn-icon-line-height-lg: 2.5625rem;
  --mdb-btn-icon-line-height-sm: 1.5625rem;
}
[class*="btn-outline-"].btn-floating .fab,
[class*="btn-outline-"].btn-floating .far,
[class*="btn-outline-"].btn-floating .fas {
  width: var(--mdb-btn-icon-width);
  line-height: var(--mdb-btn-icon-line-height);
}
.btn-group-lg > [class*="btn-outline-"].btn-floating.btn .fab,
.btn-group-lg > [class*="btn-outline-"].btn-floating.btn .far,
.btn-group-lg > [class*="btn-outline-"].btn-floating.btn .fas,
[class*="btn-outline-"].btn-floating.btn-lg .fab,
[class*="btn-outline-"].btn-floating.btn-lg .far,
[class*="btn-outline-"].btn-floating.btn-lg .fas {
  width: var(--mdb-btn-icon-width-lg);
  line-height: var(--mdb-btn-icon-line-height-lg);
}
.btn-group-sm > [class*="btn-outline-"].btn-floating.btn .fab,
.btn-group-sm > [class*="btn-outline-"].btn-floating.btn .far,
.btn-group-sm > [class*="btn-outline-"].btn-floating.btn .fas,
[class*="btn-outline-"].btn-floating.btn-sm .fab,
[class*="btn-outline-"].btn-floating.btn-sm .far,
[class*="btn-outline-"].btn-floating.btn-sm .fas {
  width: var(--mdb-btn-icon-width-sm);
  line-height: var(--mdb-btn-icon-line-height-sm);
}
.fixed-action-btn {
  --mdb-btn-right: 2.1875rem;
  --mdb-btn-bottom: 2.1875rem;
  --mdb-btn-zindex: 1030;
  --mdb-btn-padding-top: 0.9375rem;
  --mdb-btn-padding-bottom: 1.25rem;
  --mdb-btn-padding-x: 1.25rem;
  --mdb-btn-margin-bottom: 1.5rem;
  position: fixed;
  right: var(--mdb-btn-right);
  bottom: var(--mdb-btn-bottom);
  z-index: var(--mdb-btn-zindex);
  display: flex;
  flex-flow: column-reverse nowrap;
  align-items: center;
  padding: var(--mdb-btn-padding-top) var(--mdb-btn-padding-x)
    var(--mdb-btn-padding-bottom);
  margin-bottom: 0;
  height: auto;
  overflow: hidden;
}
.fixed-action-btn > .btn-floating {
  position: relative;
  transform: scale(1.2);
  z-index: 10;
}
.fixed-action-btn ul {
  position: absolute;
  bottom: 0;
  left: 0;
  right: 0;
  display: flex;
  flex-direction: column;
  padding: 0;
  margin: 0;
  text-align: center;
  opacity: 0;
  transition: transform 0.4s, opacity 0.4s;
  z-index: -1;
}
.fixed-action-btn ul li {
  z-index: 0;
  display: flex;
  margin-right: auto;
  margin-bottom: var(--mdb-btn-margin-bottom);
  margin-left: auto;
}
.fixed-action-btn ul li:first-of-type {
  margin-top: calc(var(--mdb-btn-margin-bottom) * 0.5);
}
.fixed-action-btn ul a.btn {
  opacity: 0;
  transition: opacity 0.4s ease-in;
}
.fixed-action-btn.active ul,
.fixed-action-btn ul a.btn.shown {
  opacity: 1;
}
.btn-block {
  --mdb-btn-margin-top: 0.5rem;
  display: block;
  width: 100%;
}
.btn-block + .btn-block {
  margin-top: var(--mdb-btn-margin-top);
}
hr.divider-horizontal:not([size]) {
  height: 2px;
}
.divider-horizontal {
  opacity: 1;
  background-color: #f5f5f5;
  height: 2px;
}
.divider-vertical {
  opacity: 1;
  background-color: #f5f5f5;
  display: inline-block;
  width: 2px;
  margin: 0 1rem;
}
hr.divider-horizontal-blurry {
  background-image: linear-gradient(90deg, transparent, #666, transparent);
  background-color: transparent;
}
hr.divider-vertical-blurry {
  background-image: linear-gradient(180deg, transparent, #666, transparent);
  background-color: transparent;
  width: 1px;
  top: 0;
  right: 0;
}
.dropdown-menu {
  --mdb-dropdown-item-border-radius: 0.5rem;
  color: var(--mdb-dropdown-color);
  margin: 0;
  padding-top: 0;
  padding-bottom: 0;
  border: 0;
  box-shadow: var(--mdb-dropdown-box-shadow);
  font-size: var(--mdb-dropdown-font-size);
  top: 100%;
  left: 0;
  margin-top: var(--mdb-dropdown-spacer);
}
.dropdown-menu > li {
  border-radius: 0;
}
.dropdown-menu > li:first-child,
.dropdown-menu > li:first-child .dropdown-item {
  border-top-left-radius: var(--mdb-dropdown-item-border-radius);
  border-top-right-radius: var(--mdb-dropdown-item-border-radius);
  border-bottom-left-radius: 0;
  border-bottom-right-radius: 0;
}
.dropdown-menu > li:not(:first-child):not(:last-child) .dropdown-item {
  border-radius: 0;
}
.dropdown-menu > li:last-child,
.dropdown-menu > li:last-child .dropdown-item {
  border-top-left-radius: 0;
  border-top-right-radius: 0;
  border-bottom-left-radius: var(--mdb-dropdown-item-border-radius);
  border-bottom-right-radius: var(--mdb-dropdown-item-border-radius);
}
.dropdown-menu.animation {
  --mdb-dropdown-menu-animated-animation-duration: 0.55s;
  --mdb-dropdown-menu-animated-animation-timing-function: ease;
  display: block;
  animation-duration: var(--mdb-dropdown-menu-animated-animation-duration);
  animation-timing-function: var(
    --mdb-dropdown-menu-animated-animation-timing-function
  );
}
.dropdown-item {
  --mdb-dropdown-state-color: #16181b;
  --mdb-dropdown-state-background-color: #eee;
  padding: var(--mdb-dropdown-item-padding-y) var(--mdb-dropdown-item-padding-x);
  color: var(--mdb-dropdown-color);
  border-radius: 0;
}
.dropdown-item.active,
.dropdown-item:active,
.dropdown-item:focus,
.dropdown-item:hover {
  color: var(--mdb-dropdown-state-color);
  background-color: var(--mdb-dropdown-state-background-color);
}
.hidden-arrow.dropdown-toggle:after {
  display: none;
}
.animation {
  animation-duration: 1s;
  animation-fill-mode: both;
  padding: auto;
}
@media (prefers-reduced-motion) {
  .animation {
    transition: none !important;
    animation: unset !important;
  }
}
@keyframes fade-in {
  0% {
    opacity: 0;
  }
  to {
    opacity: 1;
  }
}
.fade-in {
  animation-name: fade-in;
}
@keyframes fade-out {
  0% {
    opacity: 1;
  }
  to {
    opacity: 0;
  }
}
.fade-out {
  animation-name: fade-out;
}
.dropdown-divider {
  --mdb-dropdown-divider-border-top-width: 2px;
  --mdb-dropdown-divider-border-top-bg: #f5f5f5;
  border-top: var(--mdb-dropdown-divider-border-top-width) solid
    var(--mdb-dropdown-divider-border-top-bg);
  opacity: 1;
}
.dropdown-menu INPUT:not(:-webkit-autofill),
.dropdown-menu SELECT:not(:-webkit-autofill),
.dropdown-menu TEXTAREA:not(:-webkit-autofill) {
  animation-name: none !important;
}
.btn-group,
.btn-group-vertical {
  --mdb-btn-box-shadow: 0 4px 9px -4px rgba(0, 0, 0, 0.35);
  --mdb-btn-hover-box-shadow: 0 8px 9px -4px rgba(0, 0, 0, 0.15),
    0 4px 18px 0 rgba(0, 0, 0, 0.1);
  --mdb-btn-focus-box-shadow: 0 8px 9px -4px rgba(0, 0, 0, 0.15),
    0 4px 18px 0 rgba(0, 0, 0, 0.1);
  --mdb-btn-active-box-shadow: 0 8px 9px -4px rgba(0, 0, 0, 0.15),
    0 4px 18px 0 rgba(0, 0, 0, 0.1);
  --mdb-btn-group-transition: color 0.15s ease-in-out,
    background-color 0.15s ease-in-out, border-color 0.15s ease-in-out,
    box-shadow 0.15s ease-in-out;
  box-shadow: var(--mdb-btn-box-shadow);
  transition: var(--mdb-btn-group-transition);
}
.btn-group-vertical:hover,
.btn-group:hover {
  box-shadow: var(--mdb-btn-hover-box-shadow);
}
.btn-group-vertical.focus,
.btn-group-vertical:focus,
.btn-group.focus,
.btn-group:focus {
  box-shadow: var(--mdb-btn-focus-box-shadow);
}
.btn-group-vertical.active,
.btn-group-vertical:active,
.btn-group.active,
.btn-group:active {
  box-shadow: var(--mdb-btn-active-box-shadow);
}
.btn-group-vertical.active:focus,
.btn-group-vertical:active:focus,
.btn-group.active:focus,
.btn-group:active:focus {
  box-shadow: var(--mdb-btn-focus-box-shadow);
}
.btn-group-vertical.disabled,
.btn-group-vertical:disabled,
.btn-group.disabled,
.btn-group:disabled,
fieldset:disabled .btn-group,
fieldset:disabled .btn-group-vertical {
  box-shadow: var(--mdb-btn-box-shadow);
  border: 0;
}
.btn-group-vertical > .btn,
.btn-group > .btn {
  box-shadow: none;
}
.btn-group-vertical > .btn:first-child:hover,
.btn-group-vertical > .btn:focus-visible,
.btn-group-vertical > .btn:hover,
.btn-group > .btn:first-child:hover,
.btn-group > .btn:focus-visible,
.btn-group > .btn:hover,
:not(.btn-check) + .btn-group-vertical > .btn:hover,
:not(.btn-check) + .btn-group > .btn:hover {
  box-shadow: none !important;
}
.btn-check:active + .btn-group-vertical > .btn,
.btn-check:active + .btn-group-vertical > .btn:focus,
.btn-check:active + .btn-group > .btn,
.btn-check:active + .btn-group > .btn:focus,
.btn-check:checked + .btn-group-vertical > .btn,
.btn-check:checked + .btn-group-vertical > .btn:focus,
.btn-check:checked + .btn-group > .btn,
.btn-check:checked + .btn-group > .btn:focus,
.btn-check:focus + .btn-group-vertical > .btn,
.btn-check:focus + .btn-group > .btn,
.btn-check:focus-visible + .btn-group-vertical > .btn,
.btn-check:focus-visible + .btn-group > .btn,
.btn-group-vertical > .btn-group,
.btn-group-vertical > .btn.active,
.btn-group-vertical > .btn.active:focus,
.btn-group-vertical > .btn.disabled,
.btn-group-vertical > .btn.show,
.btn-group-vertical > .btn.show:focus,
.btn-group-vertical > .btn:active,
.btn-group-vertical > .btn:active:focus,
.btn-group-vertical > .btn:disabled,
.btn-group-vertical > .btn:focus,
.btn-group > .btn-group,
.btn-group > .btn.active,
.btn-group > .btn.active:focus,
.btn-group > .btn.disabled,
.btn-group > .btn.show,
.btn-group > .btn.show:focus,
.btn-group > .btn:active,
.btn-group > .btn:active:focus,
.btn-group > .btn:disabled,
.btn-group > .btn:focus,
fieldset:disabled .btn-group-vertical > .btn,
fieldset:disabled .btn-group > .btn {
  box-shadow: none;
}
.btn-group-vertical > .btn-link:first-child,
.btn-group-vertical > .btn-tertiary:first-child,
.btn-group > .btn-link:first-child,
.btn-group > .btn-tertiary:first-child {
  border-top-left-radius: 0;
  border-bottom-left-radius: 0;
}
.btn-group-vertical > .btn-link:last-child,
.btn-group-vertical > .btn-tertiary:last-child,
.btn-group > .btn-link:last-child,
.btn-group > .btn-tertiary:last-child {
  border-top-right-radius: 0;
  border-bottom-right-radius: 0;
}
.btn-group,
.btn-group-lg > .btn,
.btn-group-sm > .btn {
  --mdb-btn-border-radius: 0.25rem;
  border-radius: var(--mdb-btn-border-radius);
}
.nav-tabs {
  border-bottom: 0;
}
.nav-tabs .nav-link {
  --mdb-nav-tabs-link-font-weight: 500;
  --mdb-nav-tabs-link-font-size: 12px;
  --mdb-nav-tabs-link-color: rgba(0, 0, 0, 0.55);
  --mdb-nav-tabs-link-padding-top: 17px;
  --mdb-nav-tabs-link-padding-bottom: 16px;
  --mdb-nav-tabs-link-padding-x: 29px;
  --mdb-nav-tabs-link-hover-bgc: #f7f7f7;
  --mdb-nav-tabs-link-border-bottom-width: 2px;
  --mdb-nav-tabs-link-active-color: #3b71ca;
  --mdb-nav-tabs-link-active-border-color: #3b71ca;
  border-width: 0;
  border-bottom: var(--mdb-nav-tabs-link-border-bottom-width) solid transparent;
  border-radius: 0;
  text-transform: uppercase;
  line-height: 1;
  font-weight: var(--mdb-nav-tabs-link-font-weight);
  font-size: var(--mdb-nav-tabs-link-font-size);
  color: var(--mdb-nav-tabs-link-color);
  padding: var(--mdb-nav-tabs-link-padding-top)
    var(--mdb-nav-tabs-link-padding-x) var(--mdb-nav-tabs-link-padding-bottom)
    var(--mdb-nav-tabs-link-padding-x);
}
.nav-tabs .nav-link:hover {
  background-color: var(--mdb-nav-tabs-link-hover-bgc);
  border-color: transparent;
}
.nav-tabs .nav-link:focus {
  border-color: transparent;
}
.nav-tabs .nav-item.show .nav-link,
.nav-tabs .nav-link.active {
  color: var(--mdb-nav-tabs-link-active-color);
  border-color: var(--mdb-nav-tabs-link-active-border-color);
}
.nav-pills {
  margin-left: -0.5rem;
}
.nav-pills .nav-link {
  --mdb-nav-pills-link-border-radius: 0.25rem;
  --mdb-nav-pills-link-font-size: 12px;
  --mdb-nav-pills-link-padding-top: 17px;
  --mdb-nav-pills-link-padding-bottom: 16px;
  --mdb-nav-pills-link-padding-x: 29px;
  --mdb-nav-pills-link-line-height: 1;
  --mdb-nav-pills-link-hover-bg: #f7f7f7;
  --mdb-nav-pills-link-font-weight: 500;
  --mdb-nav-pills-link-color: rgba(0, 0, 0, 0.55);
  --mdb-nav-pills-margin: 0.5rem;
  border-radius: var(--mdb-nav-pills-link-border-radius);
  font-size: var(--mdb-nav-pills-link-font-size);
  text-transform: uppercase;
  padding: var(--mdb-nav-pills-link-padding-top)
    var(--mdb-nav-pills-link-padding-x) var(--mdb-nav-pills-link-padding-bottom)
    var(--mdb-nav-pills-link-padding-x);
  line-height: var(--mdb-nav-pills-link-line-height);
  background-color: var(--mdb-nav-pills-link-hover-bg);
  font-weight: var(--mdb-nav-pills-link-font-weight);
  color: var(--mdb-nav-pills-link-color);
  margin: var(--mdb-nav-pills-margin);
}
.nav-pills .nav-link.active,
.nav-pills .show > .nav-link {
  --mdb-nav-pills-link-active-bg: #e3ebf7;
  --mdb-nav-pills-link-active-color: #285192;
  background-color: var(--mdb-nav-pills-link-active-bg);
  color: var(--mdb-nav-pills-link-active-color);
}
.nav-fill .nav-item .nav-link,
.nav-justified .nav-item .nav-link {
  width: auto;
}
.navbar {
  --mdb-navbar-box-shadow: 0 4px 12px 0 rgba(0, 0, 0, 0.07),
    0 2px 4px rgba(0, 0, 0, 0.05);
  --mdb-navbar-padding-top: 0.5625rem;
  --mdb-navbar-brand-img-margin-right: 0.25rem;
  box-shadow: var(--mdb-navbar-box-shadow);
  padding-top: var(--mdb-navbar-padding-top);
}
.navbar-toggler {
  border: 0;
}
.navbar-toggler:focus {
  box-shadow: none;
}
.navbar-dark .navbar-toggler,
.navbar-light .navbar-toggler {
  border: 0;
}
.navbar-brand {
  display: flex;
  align-items: center;
}
.navbar-brand img {
  margin-right: var(--mdb-navbar-brand-img-margin-right);
}
.navbar-nav .dropdown-menu {
  position: absolute;
}
.navbar-dark .navbar-toggler-icon,
.navbar-light .navbar-toggler-icon {
  background-image: none;
}
.card {
  border: 0;
}
.card .bg-image {
  border-top-left-radius: var(--mdb-card-border-radius);
  border-top-right-radius: var(--mdb-card-border-radius);
}
.card[class*="bg-"] .card-header {
  --mdb-card-header-border-bottom-color: var(--mdb-border-color-translucent);
  border-bottom-color: var(--mdb-card-header-border-bottom-color);
}
.card[class*="bg-"] .card-footer {
  --mdb-card-footer-border-top-color: var(--mdb-border-color-translucent);
  border-top-color: var(--mdb-card-footer-border-top-color);
}
.card-header {
  --mdb-card-header-border-width: 2px;
  --mdb-card-header-border-color: #f5f5f5;
  border-bottom: var(--mdb-card-header-border-width) solid
    var(--mdb-card-header-border-color);
}
.card-body[class*="bg-"] {
  border-bottom-left-radius: var(--mdb-card-border-radius);
  border-bottom-right-radius: var(--mdb-card-border-radius);
}
.card-footer {
  --mdb-card-footer-border-color: #f5f5f5;
  --mdb-card-footer-border-width: 2px;
  border-top: var(--mdb-card-footer-border-width) solid
    var(--mdb-card-footer-border-color);
}
.card-img-left {
  border-top-left-radius: var(--mdb-card-border-radius);
  border-bottom-left-radius: var(--mdb-card-border-radius);
}
.navbar .breadcrumb {
  --mdb-breadcrumb-item-color: rgba(0, 0, 0, 0.55);
  --mdb-breadcrumb-item-hover-color: rgba(0, 0, 0, 0.7);
  --mdb-breadcrumb-item-before-color: rgba(0, 0, 0, 0.55);
  --mdb-breadcrumb-item-transition: color 0.15s ease-in-out;
  background-color: transparent;
  margin-bottom: 0;
}
.navbar .breadcrumb .breadcrumb-item a {
  color: var(--mdb-breadcrumb-item-color);
  transition: var(--mdb-breadcrumb-item-transition);
}
.navbar .breadcrumb .breadcrumb-item a:focus,
.navbar .breadcrumb .breadcrumb-item a:hover {
  color: var(--mdb-breadcrumb-item-hover-color);
}
.navbar .breadcrumb .breadcrumb-item + .breadcrumb-item:before {
  color: var(--mdb-breadcrumb-item-before-color);
}
.pagination {
  --mdb-pagination-border-radius: 0.25rem;
  --mdb-pagination-active-box-shadow: 0 4px 9px -4px #e3ebf7;
  --mdb-pagination-active-transition: all 0.2s linear;
  --mdb-pagination-active-font-weight: 500;
  --mdb-pagination-circle-border-radius: 50%;
  --mdb-pagination-circle-padding-x: 0.841rem;
  --mdb-pagination-circle-padding-l-lg: 1.399414rem;
  --mdb-pagination-circle-padding-r-lg: 1.399415rem;
  --mdb-pagination-circle-padding-l-sm: 0.696rem;
  --mdb-pagination-circle-padding-r-sm: 0.688rem;
}
.page-link {
  background-color: transparent;
  border: 0;
  outline: 0;
  border-radius: var(--mdb-pagination-border-radius);
}
.page-link:focus {
  box-shadow: none;
}
.active > .page-link,
.page-link.active {
  border: 0;
  box-shadow: var(--mdb-pagination-active-box-shadow);
  transition: var(--mdb-pagination-active-transition);
  font-weight: var(--mdb-pagination-active-font-weight);
}
.page-item:not(:first-child) .page-link {
  margin-left: 0;
}
.page-item:first-child .page-link {
  border-top-left-radius: var(--mdb-pagination-border-radius);
  border-bottom-left-radius: var(--mdb-pagination-border-radius);
}
.page-item:last-child .page-link {
  border-top-right-radius: var(--mdb-pagination-border-radius);
  border-bottom-right-radius: var(--mdb-pagination-border-radius);
}
.pagination-circle .page-item:first-child .page-link,
.pagination-circle .page-item:last-child .page-link,
.pagination-circle .page-link {
  border-radius: var(--mdb-pagination-circle-border-radius);
}
.pagination-circle .page-link {
  padding-left: var(--mdb-pagination-circle-padding-x);
  padding-right: var(--mdb-pagination-circle-padding-x);
}
.pagination-circle.pagination-lg .page-link {
  padding-left: var(--mdb-pagination-circle-padding-l-lg);
  padding-right: var(--mdb-pagination-circle-padding-r-lg);
}
.pagination-circle.pagination-sm .page-link {
  padding-left: var(--mdb-pagination-circle-padding-l-sm);
  padding-right: var(--mdb-pagination-circle-padding-r-sm);
}
.badge-dot {
  --mdb-badge-border-radius: 4.5px;
  --mdb-badge-height: 9px;
  --mdb-badge-width: 9px;
  --mdb-badge-margin-left: -0.3125rem;
  position: absolute;
  min-width: 0;
  width: var(--mdb-badge-width);
  height: var(--mdb-badge-height);
  border-radius: var(--mdb-badge-border-radius);
  padding: 0;
  margin-left: var(--mdb-badge-margin-left);
}
.badge-dot:empty {
  display: inline-block;
}
.badge-notification {
  --mdb-badge-font-size: 0.6rem;
  --mdb-badge-padding-x: 0.45em;
  --mdb-badge-padding-y: 0.2em;
  --mdb-badge-margin-top: -0.1rem;
  --mdb-badge-margin-left: -0.5rem;
  position: absolute;
  font-size: var(--mdb-badge-font-size);
  padding: var(--mdb-badge-padding-y) var(--mdb-badge-padding-x);
  margin-top: var(--mdb-badge-margin-top);
  margin-left: var(--mdb-badge-margin-left);
}
.badge-primary {
  background-color: #dfe7f6;
  color: #2c58a0;
}
.badge-primary i {
  color: #376fc8;
}
.badge-secondary {
  background-color: #ebedef;
  color: #40464f;
}
.badge-secondary i {
  color: #565e6c;
}
.badge-success {
  background-color: #d6f0e0;
  color: #0d6832;
}
.badge-success i {
  color: #139647;
}
.badge-danger {
  background-color: #f9e1e5;
  color: #af233a;
}
.badge-danger i {
  color: #d62e4a;
}
.badge-warning {
  background-color: #fbf0da;
  color: #73510d;
}
.badge-warning i {
  color: #a17112;
}
.badge-info {
  background-color: #def1f7;
  color: #1c657d;
}
.badge-info i {
  color: #2686a6;
}
.badge-light {
  background-color: #f5f5f5;
  color: #4f4f4f;
}
.badge-light i {
  color: #8c8c8c;
}
.badge-dark {
  background-color: #332e2e;
  color: #f5f5f5;
}
.badge-dark i {
  color: #e8e8e8;
}
.alert {
  border: 0;
}
.alert-absolute {
  position: absolute;
}
.alert-fixed {
  --mdb-alert-fixed-z-index: 1070;
  position: fixed;
  z-index: var(--mdb-alert-fixed-z-index);
}
.parent-alert-relative {
  position: relative;
}
.alert-primary {
  background-color: #dfe7f6;
  color: #2c58a0;
}
.alert-primary i {
  color: #376fc8;
}
.alert-primary .alert-link {
  color: #2c58a0;
}
.alert-primary .alert-link:hover {
  color: #234680;
}
.alert-secondary {
  background-color: #ebedef;
  color: #40464f;
}
.alert-secondary i {
  color: #565e6c;
}
.alert-secondary .alert-link {
  color: #40464f;
}
.alert-secondary .alert-link:hover {
  color: #33383f;
}
.alert-success {
  background-color: #d6f0e0;
  color: #0d6832;
}
.alert-success i {
  color: #139647;
}
.alert-success .alert-link {
  color: #0d6832;
}
.alert-success .alert-link:hover {
  color: #0a5328;
}
.alert-danger {
  background-color: #f9e1e5;
  color: #af233a;
}
.alert-danger i {
  color: #d62e4a;
}
.alert-danger .alert-link {
  color: #af233a;
}
.alert-danger .alert-link:hover {
  color: #8c1c2e;
}
.alert-warning {
  background-color: #fbf0da;
  color: #73510d;
}
.alert-warning i {
  color: #a17112;
}
.alert-warning .alert-link {
  color: #73510d;
}
.alert-warning .alert-link:hover {
  color: #5c410a;
}
.alert-info {
  background-color: #def1f7;
  color: #1c657d;
}
.alert-info i {
  color: #2686a6;
}
.alert-info .alert-link {
  color: #1c657d;
}
.alert-info .alert-link:hover {
  color: #165164;
}
.alert-light {
  background-color: #f5f5f5;
  color: #4f4f4f;
}
.alert-light i {
  color: #8c8c8c;
}
.alert-light .alert-link {
  color: #4f4f4f;
}
.alert-light .alert-link:hover {
  color: #3f3f3f;
}
.alert-dark {
  background-color: #332e2e;
  color: #f5f5f5;
}
.alert-dark i {
  color: #e8e8e8;
}
.alert-dark .alert-link {
  color: #f5f5f5;
}
.alert-dark .alert-link:hover {
  color: #c4c4c4;
}
.progress {
  border-radius: 0;
  box-shadow: none;
}
.list-group {
  --mdb-list-group-item-transition-time: 0.5s;
}
.list-group-item-action,
.list-group-item-action:hover {
  transition: var(--mdb-list-group-item-transition-time);
}
.list-group-light {
  --mdb-list-group-light-item-py: 1rem;
  --mdb-list-group-light-item-border: 2px solid #f5f5f5;
  --mdb-list-group-light-item-border-width: 2px;
  --mdb-list-group-light-active-border-radius: 0.5rem;
  --mdb-list-group-light-active-bg: #dfe7f6;
  --mdb-list-group-light-active-color: #2c58a0;
}
.list-group-light .list-group-item {
  padding: var(--mdb-list-group-light-item-py) 0;
  border: var(--mdb-list-group-light-item-border);
}
.list-group-light > .list-group-item {
  border-left-width: 0;
  border-bottom-width: var(--mdb-list-group-light-item-border-width);
  border-right-width: 0;
  border-top-width: 0;
}
.list-group-light > .list-group-item:last-of-type {
  border: none;
}
.list-group-light .active {
  border: none;
  border-radius: var(--mdb-list-group-light-active-border-radius);
  background-color: var(--mdb-list-group-light-active-bg);
  color: var(--mdb-list-group-light-active-color);
}
.list-group-light .list-group-item-action:focus,
.list-group-light .list-group-item-action:hover {
  border-radius: var(--mdb-list-group-light-active-border-radius);
}
.list-group-small {
  --mdb-list-group-small-item-py: 0.5rem;
}
.list-group-small .list-group-item {
  padding: var(--mdb-list-group-small-item-py) 0;
}
.list-group-item-primary {
  background-color: #dfe7f6;
  color: #2c58a0;
}
.list-group-item-primary i {
  color: #376fc8;
}
.list-group-item-secondary {
  background-color: #ebedef;
  color: #40464f;
}
.list-group-item-secondary i {
  color: #565e6c;
}
.list-group-item-success {
  background-color: #d6f0e0;
  color: #0d6832;
}
.list-group-item-success i {
  color: #139647;
}
.list-group-item-danger {
  background-color: #f9e1e5;
  color: #af233a;
}
.list-group-item-danger i {
  color: #d62e4a;
}
.list-group-item-warning {
  background-color: #fbf0da;
  color: #73510d;
}
.list-group-item-warning i {
  color: #a17112;
}
.list-group-item-info {
  background-color: #def1f7;
  color: #1c657d;
}
.list-group-item-info i {
  color: #2686a6;
}
.list-group-item-light {
  background-color: #f5f5f5;
  color: #4f4f4f;
}
.list-group-item-light i {
  color: #8c8c8c;
}
.list-group-item-dark {
  background-color: #332e2e;
  color: #f5f5f5;
}
.list-group-item-dark i {
  color: #e8e8e8;
}
.btn-close:focus {
  box-shadow: none;
}
.modal-content {
  --mdb-modal-box-shadow: 0 2px 15px -3px rgba(0, 0, 0, 0.07),
    0 10px 20px -2px rgba(0, 0, 0, 0.04);
  border: 0;
  box-shadow: var(--mdb-modal-box-shadow);
}
.toast {
  --mdb-toast-border-bottom-width: 2px;
  --mdb-toast-btn-close-width: 1.3em;
  --mdb-toast-btn-close-mr: -0.375rem;
  --mdb-toast-btn-close-ml: 0.75rem;
  border: 0;
}
.toast .btn-close {
  width: var(--mdb-toast-btn-close-width);
}
.toast-header {
  border-bottom-width: var(--mdb-toast-border-bottom-width);
}
.toast-header .btn-close {
  margin-right: var(--mdb-toast-btn-close-mr);
  margin-left: var(--mdb-toast-btn-close-ml);
}
.parent-toast-relative {
  position: relative;
}
.toast-absolute {
  position: absolute;
}
.toast-fixed {
  position: fixed;
  z-index: var(--mdb-toast-zindex);
}
.toast-primary {
  background-color: #dfe7f6;
  color: #2c58a0;
  border-color: #c7d6f0;
}
.toast-primary i {
  color: #376fc8;
}
.toast-secondary {
  background-color: #ebedef;
  color: #40464f;
  border-color: #dadee1;
}
.toast-secondary i {
  color: #565e6c;
}
.toast-success {
  background-color: #d6f0e0;
  color: #0d6831;
  border-color: #c0e7d0;
}
.toast-success i {
  color: #139647;
}
.toast-danger {
  background-color: #f9e1e5;
  color: #af233a;
  border-color: #f4c8cf;
}
.toast-danger i {
  color: #d62e4a;
}
.toast-warning {
  background-color: #fbf0da;
  color: #73510d;
  border-color: #f9e4be;
}
.toast-warning i {
  color: #a17112;
}
.toast-info {
  background-color: #def1f7;
  color: #1c657d;
  border-color: #c6e6f1;
}
.toast-info i {
  color: #2686a6;
}
.toast-light {
  background-color: #f5f5f5;
  color: #4f4f4f;
  border-color: #e6e6e6;
}
.toast-light i {
  color: #8c8c8c;
}
.toast-dark {
  background-color: #332e2e;
  color: #f5f5f5;
  border-color: #443c3c;
}
.toast-dark i {
  color: #e8e8e8;
}
.tooltip {
  --mdb-tooltip-font-size: 14px;
}
.tooltip.show {
  opacity: 1;
}
.tooltip .tooltip-arrow {
  display: none;
}
.tooltip-inner {
  font-size: var(--mdb-tooltip-font-size);
}
.popover {
  --mdb-popover-border-bottom-width: 2px;
}
.popover .popover-arrow {
  display: none;
}
.popover-header {
  border-bottom: var(--mdb-popover-border-bottom-width) solid
    var(--mdb-popover-border-color);
}
.nav-pills.menu-sidebar .nav-link {
  --mdb-scrollspy-menu-sidebar-font-size: 0.8rem;
  --mdb-scrollspy-menu-sidebar-color: #262626;
  --mdb-scrollspy-menu-sidebar-line-height: 1.1rem;
  --mdb-scrollspy-menu-sidebar-padding-x: 5px;
  --mdb-scrollspy-menu-sidebar-font-weight: 400;
  --mdb-scrollspy-menu-sidebar-transition: all 0.2s ease-in-out;
  --mdb-scrollspy-menu-sidebar-margin-y: 3px;
  font-size: var(--mdb-scrollspy-menu-sidebar-font-size);
  background-color: transparent;
  color: var(--mdb-scrollspy-menu-sidebar-color);
  line-height: var(--mdb-scrollspy-menu-sidebar-line-height);
  padding: 0 var(--mdb-scrollspy-menu-sidebar-padding-x);
  font-weight: var(--mdb-scrollspy-menu-sidebar-font-weight);
  transition: var(--mdb-scrollspy-menu-sidebar-transition);
  text-transform: none;
  margin-top: var(--mdb-scrollspy-menu-sidebar-margin-y);
  margin-bottom: var(--mdb-scrollspy-menu-sidebar-margin-y);
}
.nav-pills.menu-sidebar .nav-link.active,
.nav-pills.menu-sidebar .show > .nav-link {
  --mdb-scrollspy-menu-sidebar-active-color: #3b71ca;
  --mdb-scrollspy-menu-sidebar-active-font-weight: 600;
  --mdb-scrollspy-menu-sidebar-active-border-width: 0.125rem;
  --mdb-scrollspy-menu-sidebar-active-border-color: #3b71ca;
  background-color: transparent;
  box-shadow: none;
  color: var(--mdb-scrollspy-menu-sidebar-active-color);
  font-weight: var(--mdb-scrollspy-menu-sidebar-active-font-weight);
  border-left: var(--mdb-scrollspy-menu-sidebar-active-border-width) solid
    var(--mdb-scrollspy-menu-sidebar-active-border-color);
  border-radius: 0;
}
.nav-pills.menu-sidebar .collapsible-scrollspy ~ .nav {
  --mdb-scrollspy-collapsible-nav-transition-time: 0.5s;
  transition: height var(--mdb-scrollspy-collapsible-nav-transition-time) ease;
  flex-wrap: nowrap;
}
.ripple-surface {
  position: relative;
  overflow: hidden;
  display: inline-block;
  vertical-align: bottom;
}
.ripple-surface-unbound {
  overflow: visible;
}
.ripple-wave {
  --mdb-ripple-wave-cubicBezier: cubic-bezier(0, 0, 0.15, 1);
  --mdb-ripple-wave-border-radius: 50%;
  --mdb-ripple-wave-opacity: 0.5;
  --mdb-ripple-wave-transform: scale(0);
  --mdb-ripple-wave-z-index: 999;
  --mdb-ripple-wave-active-transform: scale(1);
  background-image: radial-gradient(
    circle,
    rgba(0, 0, 0, 0.2) 0,
    rgba(0, 0, 0, 0.3) 40%,
    rgba(0, 0, 0, 0.4) 50%,
    rgba(0, 0, 0, 0.5) 60%,
    transparent 70%
  );
  border-radius: var(--mdb-ripple-wave-border-radius);
  opacity: var(--mdb-ripple-wave-opacity);
  pointer-events: none;
  position: absolute;
  touch-action: none;
  transform: var(--mdb-ripple-wave-transform);
  transition-property: transform, opacity;
  transition-timing-function: var(--mdb-ripple-wave-cubicBezier),
    var(--mdb-ripple-wave-cubicBezier);
  z-index: var(--mdb-ripple-wave-z-index);
}
.ripple-wave.active {
  transform: var(--mdb-ripple-wave-active-transform);
  opacity: 0;
}
.btn .ripple-wave,
.input-wrapper .ripple-wave {
  background-image: radial-gradient(
    circle,
    hsla(0, 0%, 100%, 0.2) 0,
    hsla(0, 0%, 100%, 0.3) 40%,
    hsla(0, 0%, 100%, 0.4) 50%,
    hsla(0, 0%, 100%, 0.5) 60%,
    hsla(0, 0%, 100%, 0) 70%
  );
}
.ripple-surface-primary .ripple-wave {
  background-image: radial-gradient(
    circle,
    rgba(59, 113, 202, 0.2) 0,
    rgba(59, 113, 202, 0.3) 40%,
    rgba(59, 113, 202, 0.4) 50%,
    rgba(59, 113, 202, 0.5) 60%,
    rgba(59, 113, 202, 0) 70%
  );
}
.ripple-surface-secondary .ripple-wave {
  background-image: radial-gradient(
    circle,
    rgba(227, 235, 247, 0.2) 0,
    rgba(227, 235, 247, 0.3) 40%,
    rgba(227, 235, 247, 0.4) 50%,
    rgba(227, 235, 247, 0.5) 60%,
    rgba(227, 235, 247, 0) 70%
  );
}
.ripple-surface-success .ripple-wave {
  background-image: radial-gradient(
    circle,
    rgba(20, 164, 77, 0.2) 0,
    rgba(20, 164, 77, 0.3) 40%,
    rgba(20, 164, 77, 0.4) 50%,
    rgba(20, 164, 77, 0.5) 60%,
    rgba(20, 164, 77, 0) 70%
  );
}
.ripple-surface-danger .ripple-wave {
  background-image: radial-gradient(
    circle,
    rgba(220, 76, 100, 0.2) 0,
    rgba(220, 76, 100, 0.3) 40%,
    rgba(220, 76, 100, 0.4) 50%,
    rgba(220, 76, 100, 0.5) 60%,
    rgba(220, 76, 100, 0) 70%
  );
}
.ripple-surface-warning .ripple-wave {
  background-image: radial-gradient(
    circle,
    rgba(228, 161, 27, 0.2) 0,
    rgba(228, 161, 27, 0.3) 40%,
    rgba(228, 161, 27, 0.4) 50%,
    rgba(228, 161, 27, 0.5) 60%,
    rgba(228, 161, 27, 0) 70%
  );
}
.ripple-surface-info .ripple-wave {
  background-image: radial-gradient(
    circle,
    rgba(84, 180, 211, 0.2) 0,
    rgba(84, 180, 211, 0.3) 40%,
    rgba(84, 180, 211, 0.4) 50%,
    rgba(84, 180, 211, 0.5) 60%,
    rgba(84, 180, 211, 0) 70%
  );
}
.ripple-surface-light .ripple-wave {
  background-image: radial-gradient(
    circle,
    hsla(0, 0%, 98.4%, 0.2) 0,
    hsla(0, 0%, 98.4%, 0.3) 40%,
    hsla(0, 0%, 98.4%, 0.4) 50%,
    hsla(0, 0%, 98.4%, 0.5) 60%,
    hsla(0, 0%, 98.4%, 0) 70%
  );
}
.ripple-surface-dark .ripple-wave {
  background-image: radial-gradient(
    circle,
    rgba(51, 45, 45, 0.2) 0,
    rgba(51, 45, 45, 0.3) 40%,
    rgba(51, 45, 45, 0.4) 50%,
    rgba(51, 45, 45, 0.5) 60%,
    rgba(51, 45, 45, 0) 70%
  );
}
.range {
  --mdb-range-thumb-height: 30px;
  --mdb-range-thumb-width: 30px;
  --mdb-range-thumb-top: -35px;
  --mdb-range-thumb-margin-left: -15px;
  --mdb-range-thumb-border-radius: 50% 50% 50% 0;
  --mdb-range-thumb-transform: scale(0);
  --mdb-range-thumb-transition: transform 0.2s ease-in-out;
  --mdb-range-thumb-value-font-size: 12px;
  --mdb-range-thumb-value-line-height: 30px;
  --mdb-range-thumb-value-color: #fff;
  --mdb-range-thumb-value-font-weight: 500;
  --mdb-range-thumb-background: #3b71ca;
  position: relative;
}
.range .thumb {
  height: var(--mdb-range-thumb-height);
  width: var(--mdb-range-thumb-width);
  top: var(--mdb-range-thumb-top);
  margin-left: var(--mdb-range-thumb-margin-left);
  text-align: center;
  transform: var(--mdb-range-thumb-transform);
  transform-origin: bottom;
  transition: var(--mdb-range-thumb-transition);
}
.range .thumb,
.range .thumb:after {
  position: absolute;
  display: block;
  border-radius: var(--mdb-range-thumb-border-radius);
}
.range .thumb:after {
  content: "";
  transform: translateX(-50%);
  width: 100%;
  height: 100%;
  top: 0;
  transform: rotate(-45deg);
  background: var(--mdb-range-thumb-background);
  z-index: -1;
}
.range .thumb .thumb-value {
  display: block;
  font-size: var(--mdb-range-thumb-value-font-size);
  line-height: var(--mdb-range-thumb-value-line-height);
  color: var(--mdb-range-thumb-value-color);
  font-weight: var(--mdb-range-thumb-value-font-weight);
  z-index: 2;
}
.range .thumb.thumb-active {
  transform: scale(1);
}
.accordion-button:not(.collapsed):focus {
  box-shadow: var(--mdb-accordion-btn-focus-box-shadow);
}
.accordion-button:focus {
  border-color: var(--mdb-accordion-btn-focus-border-color);
  outline: 0;
  box-shadow: none;
}
.accordion-flush {
  --mdb-accordion-flush-btn-box-shadow: inset 0 -2px 0 #f5f5f5;
  --mdb-accordion-flush-border-bottom: 2px solid #f5f5f5;
}
.accordion-flush .accordion-button:not(.collapsed) {
  box-shadow: var(--mdb-accordion-flush-btn-box-shadow);
}
.accordion-flush .accordion-item {
  border-bottom: var(--mdb-accordion-flush-border-bottom);
}
.accordion.accordion-borderless,
.accordion.accordion-flush {
  --mdb-accordion-bg: transparent;
  background-color: var(--mdb-accordion-bg);
}
.accordion-borderless {
  --mdb-accordion-borderless-btn-border-radius: 0.5rem;
  --mdb-accordion-borderless-btn-bg: #dfe7f6;
  --mdb-accordion-borderless-btn-color: #2c58a0;
}
.accordion-borderless .accordion-item {
  border: 0;
}
.accordion-borderless .accordion-item .accordion-button {
  border-radius: var(--mdb-accordion-borderless-btn-border-radius);
}
.accordion-borderless .accordion-item .accordion-button:not(.collapsed) {
  background-color: var(--mdb-accordion-borderless-btn-bg);
  color: var(--mdb-accordion-borderless-btn-color);
  box-shadow: none;
}
.modal {
  --mdb-modal-top-left-top: 10px;
  --mdb-modal-top-left-left: 10px;
  --mdb-modal-top-right-top: 10px;
  --mdb-modal-top-right-right: 10px;
  --mdb-modal-bottom-left-bottom: 10px;
  --mdb-modal-bottom-left-left: 10px;
  --mdb-modal-bottom-right-bottom: 10px;
  --mdb-modal-bottom-right-right: 10px;
  --mdb-modal-fade-top-transform: translate3d(0, -25%, 0);
  --mdb-modal-fade-right-transform: translate3d(25%, 0, 0);
  --mdb-modal-fade-bottom-transform: translate3d(0, 25%, 0);
  --mdb-modal-fade-left-transform: translate3d(-25%, 0, 0);
  --mdb-modal-side-right: 10px;
  --mdb-modal-side-bottom: 10px;
  --mdb-modal-non-invasive-box-shadow: 0 2px 6px -1px rgba(0, 0, 0, 0.07),
    0 6px 18px -1px rgba(0, 0, 0, 0.04);
  --mdb-modal-non-invasive-box-shadow-top: 0 -10px 20px 0 rgba(0, 0, 0, 0.05);
}
@media (min-width: 768px) {
  .modal .modal-dialog.modal-top {
    top: 0;
  }
  .modal .modal-dialog.modal-left {
    left: 0;
  }
  .modal .modal-dialog.modal-right {
    right: 0;
  }
  .modal .modal-dialog.modal-top-left {
    top: var(--mdb-modal-top-left-top);
    left: var(--mdb-modal-top-left-left);
  }
  .modal .modal-dialog.modal-top-right {
    top: var(--mdb-modal-top-right-top);
    right: var(--mdb-modal-top-right-right);
  }
  .modal .modal-dialog.modal-bottom-left {
    bottom: var(--mdb-modal-bottom-left-bottom);
    left: var(--mdb-modal-bottom-left-left);
  }
  .modal .modal-dialog.modal-bottom-right {
    right: var(--mdb-modal-bottom-right-right);
    bottom: var(--mdb-modal-bottom-right-bottom);
  }
}
.modal .modal-dialog.modal-bottom {
  bottom: 0;
}
.modal.fade.top:not(.show) .modal-dialog {
  transform: var(--mdb-modal-fade-top-transform);
}
.modal.fade.right:not(.show) .modal-dialog {
  transform: var(--mdb-modal-fade-right-transform);
}
.modal.fade.bottom:not(.show) .modal-dialog {
  transform: var(--mdb-modal-fade-bottom-transform);
}
.modal.fade.left:not(.show) .modal-dialog {
  transform: var(--mdb-modal-fade-left-transform);
}
@media (min-width: 992px) {
  .modal .modal-side {
    position: absolute;
    width: 100%;
    right: var(--mdb-modal-side-right);
    bottom: var(--mdb-modal-side-bottom);
    margin: 0;
  }
}
.modal .modal-frame {
  position: absolute;
  max-width: 100%;
  width: 100%;
  margin: 0;
}
.modal-open .modal.frame {
  overflow-y: hidden;
}
.modal-non-invasive-open {
  overflow-y: auto;
}
.modal-non-invasive-open .modal.modal-non-invasive-show {
  display: table;
}
@media (min-width: 992px) {
  .modal-non-invasive-open
    .modal.modal-non-invasive-show
    .modal-dialog.modal-bottom-left,
  .modal-non-invasive-open
    .modal.modal-non-invasive-show
    .modal-dialog.modal-bottom-right,
  .modal-non-invasive-open .modal.modal-non-invasive-show .modal-side {
    bottom: 0;
  }
  .modal-non-invasive-open .modal.modal-non-invasive-show.modal.frame.bottom,
  .modal-non-invasive-open
    .modal.modal-non-invasive-show.modal.frame.bottom
    .modal-content {
    box-shadow: var(--mdb-modal-non-invasive-box-shadow-top);
  }
  .modal-non-invasive-open .modal.modal-non-invasive-show.modal.frame.top {
    box-shadow: var(--mdb-modal-non-invasive-box-shadow);
  }
  .modal-non-invasive-open
    .modal.modal-non-invasive-show
    .modal-side.modal-bottom-left
    .modal-content,
  .modal-non-invasive-open
    .modal.modal-non-invasive-show
    .modal-side.modal-bottom-right
    .modal-content {
    box-shadow: var(--mdb-modal-non-invasive-box-shadow-top);
  }
}
.modal-non-invasive-open
  .modal.modal-non-invasive-show
  .modal-dialog.modal-bottom-right {
  right: 0;
}
.modal-non-invasive-open
  .modal.modal-non-invasive-show
  .modal-dialog.modal-bottom-left,
.modal-non-invasive-open
  .modal.modal-non-invasive-show
  .modal-dialog.modal-top-left {
  left: 0;
}
.modal-non-invasive-open .modal.modal-non-invasive-show .modal-side {
  right: 0;
}
.ps {
  --mdb-scrollbar-rail-x-y-transition-opacity-bg: background-color 0.2s linear,
    opacity 0.2s linear;
  --mdb-scrollbar-z-index: 1035;
  --mdb-scrollbar-rail-x-y-length: 0.9375rem;
  --mdb-scrollbar-rail-x-y-opacity: 0.6;
  --mdb-scrollbar-rail-x-y-hover-opacity: 0.9;
  --mdb-scrollbar-rail-x-y-bg-color: #eee;
  --mdb-scrollbar-rail-x-y-clicking: #999;
  --mdb-scrollbar-rail-x-y-clicking-length: 0.6875rem;
  --mdb-scrollbar-rail-x-transition-height-bg: background-color 0.2s linear,
    height 0.2s ease-in-out;
  --mdb-scrollbar-rail-y-transition-width-bg: background-color 0.2s linear,
    width 0.2s ease-in-out;
  --mdb-scrollbar-thumb-x-y-color: #aaa;
  --mdb-scrollbar-thumb-x-y-border-radius: 0.375rem;
  --mdb-scrollbar-thumb-x-y-length: 0.375rem;
  --mdb-scrollbar-thumb-x-y-position-length: 0.125rem;
  overflow: hidden !important;
  overflow-anchor: none;
  touch-action: auto;
}
.ps__rail-x,
.ps__rail-y {
  display: none;
  opacity: 0;
  transition: var(--mdb-scrollbar-rail-x-y-transition-opacity-bg);
  position: absolute;
  z-index: var(--mdb-scrollbar-z-index);
}
.ps__rail-x {
  height: var(--mdb-scrollbar-rail-x-y-length);
  bottom: 0;
}
.ps__rail-y {
  width: var(--mdb-scrollbar-rail-x-y-length);
  right: 0;
}
.ps--active-x > .ps__rail-x,
.ps--active-y > .ps__rail-y {
  display: block;
  background-color: transparent;
}
.ps--focus > .ps__rail-x,
.ps--focus > .ps__rail-y,
.ps--scrolling-x > .ps__rail-x,
.ps--scrolling-y > .ps__rail-y,
.ps:hover > .ps__rail-x,
.ps:hover > .ps__rail-y {
  opacity: var(--mdb-scrollbar-rail-x-y-opacity);
}
.ps .ps__rail-x.ps--clicking,
.ps .ps__rail-x:focus,
.ps .ps__rail-x:hover,
.ps .ps__rail-y.ps--clicking,
.ps .ps__rail-y:focus,
.ps .ps__rail-y:hover {
  background-color: var(--mdb-scrollbar-rail-x-y-bg-color);
  opacity: var(--mdb-scrollbar-rail-x-y-hover-opacity);
}
.ps__thumb-x,
.ps__thumb-y {
  background-color: var(--mdb-scrollbar-thumb-x-y-color);
  border-radius: var(--mdb-scrollbar-thumb-x-y-border-radius);
  position: absolute;
}
.ps__thumb-x {
  transition: var(--mdb-scrollbar-rail-x-transition-height-bg);
  height: var(--mdb-scrollbar-thumb-x-y-length);
  bottom: var(--mdb-scrollbar-thumb-x-y-position-length);
}
.ps__thumb-y {
  transition: var(--mdb-scrollbar-rail-y-transition-width-bg);
  width: var(--mdb-scrollbar-thumb-x-y-length);
  right: var(--mdb-scrollbar-thumb-x-y-position-length);
}
.ps__rail-x.ps--clicking .ps__thumb-x,
.ps__rail-x:focus > .ps__thumb-x,
.ps__rail-x:hover > .ps__thumb-x {
  background-color: var(--mdb-scrollbar-rail-x-y-clicking);
  height: var(--mdb-scrollbar-rail-x-y-clicking-length);
}
.ps__rail-y.ps--clicking .ps__thumb-y,
.ps__rail-y:focus > .ps__thumb-y,
.ps__rail-y:hover > .ps__thumb-y {
  background-color: var(--mdb-scrollbar-rail-x-y-clicking);
  width: var(--mdb-scrollbar-rail-x-y-clicking-length);
}
@supports (-ms-overflow-style: none) {
  .ps {
    overflow: auto !important;
  }
}
@media (-ms-high-contrast: none), screen and (-ms-high-contrast: active) {
  .ps {
    overflow: auto !important;
  }
}
.sidenav {
  --mdb-sidenav-transform: translateX(-100%);
  --mdb-sidenav-zindex: 1035;
  --mdb-sidenav-background-color: #fff;
  --mdb-sidenav-width: 240px;
  --mdb-sidenav-height: 100vh;
  --mdb-sidenav-box-shadow: 0 4px 12px 0 rgba(0, 0, 0, 0.07),
    0 2px 4px rgba(0, 0, 0, 0.05);
  --mdb-sidenav-data-hidden-false-transform: translateX(0%);
  --mdb-sidenav-data-color-light-color: hsla(0, 0%, 100%, 0.6);
  --mdb-sidenav-data-right-true-transform: translateX(100%);
  --mdb-sidenav-data-slim-collapsed-true-width: 77px;
  --mdb-sidenav-menu-padding: 0.2rem;
  --mdb-sidenav-collapse-sidenav-link-font-size: 0.78rem;
  --mdb-sidenav-collapse-sidenav-link-height: 1.5rem;
  --mdb-sidenav-link-font-size: 0.89rem;
  --mdb-sidenav-link-padding-y: 1rem;
  --mdb-sidenav-link-padding-x: 1.5rem;
  --mdb-sidenav-link-height: 3rem;
  --mdb-sidenav-link-border-radius: 5px;
  --mdb-sidenav-link-transition: all 0.3s linear;
  --mdb-sidenav-link-hover-background-color: #f6f9fc;
  --mdb-sidenav-link-active-focus-background-color: #f6f9fc;
  --mdb-sidenav-link-active-color: #3b71ca;
  --mdb-sidenav-subheading-font-size: 0.6rem;
  --mdb-sidenav-subheading-padding-y: 1rem;
  --mdb-sidenav-subheading-padding-x: 1.5rem;
  --mdb-sidenav-subheading-fw: 700;
  --mdb-sidenav-sm-link-pt: 0.4rem;
  --mdb-sidenav-sm-link-pb: 0.4rem;
  --mdb-sidenav-rotate-icon-margin-right: 0.8rem;
  --mdb-sidenav-rotate-icon-transition: transform 0.3s;
  --mdb-sidenav-light-color: hsla(0, 0%, 100%, 0.6);
  top: 0;
  left: 0;
  transform: var(--mdb-sidenav-transform);
  position: fixed;
  z-index: var(--mdb-sidenav-zindex);
  background-color: var(--mdb-sidenav-background-color);
  overflow: hidden;
  width: var(--mdb-sidenav-width);
  height: var(--mdb-sidenav-height);
  box-shadow: var(--mdb-sidenav-box-shadow);
}
.sidenav[data-mdb-hidden="false"] {
  transform: var(--mdb-sidenav-data-hidden-false-transform);
}
.sidenav[data-mdb-color="light"] {
  color: var(--mdb-sidenav-data-color-light-color);
}
.sidenav[data-mdb-right="true"] {
  right: 0;
  left: unset;
  transform: var(--mdb-sidenav-data-right-true-transform);
}
.sidenav[data-mdb-position="absolute"] {
  position: absolute;
  height: 100%;
}
.sidenav[data-mdb-position="relative"] {
  position: relative;
  height: 100%;
}
.sidenav [data-mdb-slim="true"] {
  display: none;
}
.sidenav[data-mdb-slim-collapsed="true"] {
  width: var(--mdb-sidenav-data-slim-collapsed-true-width);
}
.sidenav[data-mdb-slim-collapsed="true"] [data-mdb-slim="false"] {
  display: none;
}
.sidenav[data-mdb-slim-collapsed="true"] [data-mdb-slim="true"] {
  display: unset;
}
.sidenav-collapse,
.sidenav-menu {
  list-style: none;
  position: relative;
  padding: 0 var(--mdb-sidenav-menu-padding);
  margin: 0;
}
.sidenav-collapse {
  display: none;
  padding: 0;
}
.sidenav-collapse.collapsing,
.sidenav-collapse.show {
  display: block;
}
.sidenav-collapse .sidenav-link {
  font-size: var(--mdb-sidenav-collapse-sidenav-link-font-size);
  height: var(--mdb-sidenav-collapse-sidenav-link-height);
  padding-left: 3.4rem;
}
.sidenav-item {
  position: relative;
}
.sidenav-link {
  display: flex;
  align-items: center;
  cursor: pointer;
  font-size: var(--mdb-sidenav-link-font-size);
  padding: var(--mdb-sidenav-link-padding-y) var(--mdb-sidenav-link-padding-x);
  height: var(--mdb-sidenav-link-height);
  color: unset;
  overflow: hidden;
  text-overflow: ellipsis;
  white-space: nowrap;
  border-radius: var(--mdb-sidenav-link-border-radius);
  transition: var(--mdb-sidenav-link-transition);
}
.sidenav-link:hover {
  color: inherit;
  background-color: var(--mdb-sidenav-link-hover-background-color);
  outline: none;
}
.sidenav-link:active,
.sidenav-link:focus {
  color: inherit;
  background-color: var(--mdb-sidenav-link-active-focus-background-color);
  outline: none;
}
.sidenav-link.active {
  color: var(--mdb-sidenav-link-active-color);
}
.sidenav-link i {
  color: #9fa6b2;
}
.sidenav-subheading {
  color: unset;
  text-transform: uppercase;
  font-size: var(--mdb-sidenav-subheading-font-size);
  padding: var(--mdb-sidenav-subheading-padding-y)
    var(--mdb-sidenav-subheading-padding-x);
  font-weight: var(--mdb-sidenav-subheading-fw);
}
.sidenav-sm .sidenav-link {
  padding-top: var(--mdb-sidenav-sm-link-pt);
  padding-bottom: var(--mdb-sidenav-sm-link-pb);
  height: auto;
}
.rotate-icon {
  position: absolute;
  right: 0;
  margin-left: auto;
  margin-right: var(--mdb-sidenav-rotate-icon-margin-right);
  transition: var(--mdb-sidenav-rotate-icon-transition);
}
.sidenav-backdrop {
  --mdb-sidenav-backdrop-zindex: 1034;
  --mdb-sidenav-backdrop-background-color: rgba(0, 0, 0, 0.1);
  z-index: var(--mdb-sidenav-backdrop-zindex);
  top: 0;
  left: 0;
  background-color: var(--mdb-sidenav-backdrop-background-color);
}
.sidenav-light {
  color: var(--mdb-sidenav-light-color);
}
.sidenav-primary .sidenav-item .sidenav-link:hover,
.sidenav-primary .sidenav-link:active,
.sidenav-primary .sidenav-link:focus {
  color: inherit;
  background-color: rgba(59, 113, 202, 0.05);
}
.sidenav-primary .sidenav-link.active {
  color: inherit;
}
.sidenav-secondary .sidenav-item .sidenav-link:hover,
.sidenav-secondary .sidenav-link:active,
.sidenav-secondary .sidenav-link:focus {
  color: inherit;
  background-color: rgba(159, 166, 178, 0.05);
}
.sidenav-secondary .sidenav-link.active {
  color: inherit;
}
.sidenav-success .sidenav-item .sidenav-link:hover,
.sidenav-success .sidenav-link:active,
.sidenav-success .sidenav-link:focus {
  color: inherit;
  background-color: rgba(20, 164, 77, 0.05);
}
.sidenav-success .sidenav-link.active {
  color: inherit;
}
.sidenav-danger .sidenav-item .sidenav-link:hover,
.sidenav-danger .sidenav-link:active,
.sidenav-danger .sidenav-link:focus {
  color: inherit;
  background-color: rgba(220, 76, 100, 0.05);
}
.sidenav-danger .sidenav-link.active {
  color: inherit;
}
.sidenav-warning .sidenav-item .sidenav-link:hover,
.sidenav-warning .sidenav-link:active,
.sidenav-warning .sidenav-link:focus {
  color: inherit;
  background-color: rgba(228, 161, 27, 0.05);
}
.sidenav-warning .sidenav-link.active {
  color: inherit;
}
.sidenav-info .sidenav-item .sidenav-link:hover,
.sidenav-info .sidenav-link:active,
.sidenav-info .sidenav-link:focus {
  color: inherit;
  background-color: rgba(84, 180, 211, 0.05);
}
.sidenav-info .sidenav-link.active {
  color: inherit;
}
.sidenav-light .sidenav-item .sidenav-link:hover,
.sidenav-light .sidenav-link:active,
.sidenav-light .sidenav-link:focus {
  color: inherit;
  background-color: hsla(0, 0%, 98.4%, 0.05);
}
.sidenav-light .sidenav-link.active {
  color: inherit;
}
.sidenav-dark .sidenav-item .sidenav-link:hover,
.sidenav-dark .sidenav-link:active,
.sidenav-dark .sidenav-link:focus {
  color: inherit;
  background-color: rgba(51, 45, 45, 0.05);
}
.sidenav-dark .sidenav-link.active {
  color: inherit;
}
.animation {
  --mdb-animation-delay-1s: 1s;
  --mdb-animation-delay-2s: 3s;
  --mdb-animation-delay-3s: 3s;
  --mdb-animation-delay-4s: 4s;
  --mdb-animation-delay-5s: 5s;
  --mdb-animation-fast-duration: 800ms;
  --mdb-animation-faster-duration: 500ms;
  --mdb-animation-slow-duration: 2s;
  --mdb-animation-slower-duration: 3s;
}
.animation.infinite {
  animation-iteration-count: infinite;
}
.animation.delay-1s {
  animation-delay: var(--mdb-animation-delay-1s);
}
.animation.delay-2s {
  animation-delay: var(--mdb-animation-delay-2s);
}
.animation.delay-3s {
  animation-delay: var(--mdb-animation-delay-3s);
}
.animation.delay-4s {
  animation-delay: var(--mdb-animation-delay-4s);
}
.animation.delay-5s {
  animation-delay: var(--mdb-animation-delay-5s);
}
.animation.fast {
  animation-duration: var(--mdb-animation-fast-duration);
}
.animation.faster {
  animation-duration: var(--mdb-animation-faster-duration);
}
.animation.slow {
  animation-duration: var(--mdb-animation-slow-duration);
}
.animation.slower {
  animation-duration: var(--mdb-animation-slower-duration);
}
@keyframes fade-in-down {
  0% {
    opacity: 0;
    transform: var(--mdb-animation-fade-in-down-transform-from);
  }
  to {
    opacity: 1;
    transform: var(--mdb-animation-fade-in-down-transform-to);
  }
}
.fade-in-down {
  --mdb-animation-fade-in-down-transform-from: translate3d(0, -100%, 0);
  --mdb-animation-fade-in-down-transform-to: translate3d(0, 0, 0);
  animation-name: fade-in-down;
}
@keyframes fade-in-left {
  0% {
    opacity: 0;
    transform: var(--mdb-animation-fade-in-left-transform-from);
  }
  to {
    opacity: 1;
    transform: var(--mdb-animation-fade-in-left-transform-to);
  }
}
.fade-in-left {
  --mdb-animation-fade-in-left-transform-from: translate3d(-100%, 0, 0);
  --mdb-animation-fade-in-left-transform-to: translate3d(0, 0, 0);
  animation-name: fade-in-left;
}
@keyframes fade-in-right {
  0% {
    opacity: 0;
    transform: var(--mdb-animation-fade-in-right-transform-from);
  }
  to {
    opacity: 1;
    transform: var(--mdb-animation-fade-in-right-transform-to);
  }
}
.fade-in-right {
  --mdb-animation-fade-in-right-transform-from: translate3d(100%, 0, 0);
  --mdb-animation-fade-in-right-transform-to: translate3d(0, 0, 0);
  animation-name: fade-in-right;
}
@keyframes fade-in-up {
  0% {
    opacity: 0;
    transform: var(--mdb-animation-fade-in-up-transform-from);
  }
  to {
    opacity: 1;
    transform: var(--mdb-animation-fade-in-up-transform-to);
  }
}
.fade-in-up {
  --mdb-animation-fade-in-up-transform-from: translate3d(0, 100%, 0);
  --mdb-animation-fade-in-up-transform-to: translate3d(0, 0, 0);
  animation-name: fade-in-up;
}
@keyframes fade-out-down {
  0% {
    opacity: 1;
  }
  to {
    opacity: 0;
    transform: var(--mdb-animation-fade-out-down-transform-to);
  }
}
.fade-out-down {
  --mdb-animation-fade-out-down-transform-to: translate3d(0, 100%, 0);
  animation-name: fade-out-down;
}
@keyframes fade-out-left {
  0% {
    opacity: 1;
  }
  to {
    opacity: 0;
    transform: var(--mdb-animation-fade-out-left-transform-to);
  }
}
.fade-out-left {
  --mdb-animation-fade-out-left-transform-to: translate3d(-100%, 0, 0);
  animation-name: fade-out-left;
}
@keyframes fade-out-right {
  0% {
    opacity: 1;
  }
  to {
    opacity: 0;
    transform: var(--mdb-animation-fade-out-right-transform-to);
  }
}
.fade-out-right {
  --mdb-animation-fade-out-right-transform-to: translate3d(100%, 0, 0);
  animation-name: fade-out-right;
}
@keyframes fade-out-up {
  0% {
    opacity: 1;
  }
  to {
    opacity: 0;
    transform: var(--mdb-animation-fade-out-up-transform-to);
  }
}
.fade-out-up {
  --mdb-animation-fade-out-up-transform-to: translate3d(0, -100%, 0);
  animation-name: fade-out-up;
}
@keyframes slide-in-down {
  0% {
    visibility: visible;
    transform: var(--mdb-animation-slide-in-down-transform-from);
  }
  to {
    transform: var(--mdb-animation-slide-in-down-transform-to);
  }
}
.slide-in-down {
  --mdb-animation-slide-in-down-transform-from: translate3d(0, -100%, 0);
  --mdb-animation-slide-in-down-transform-to: translate3d(0, 0, 0);
  animation-name: slide-in-down;
}
@keyframes slide-in-left {
  0% {
    visibility: visible;
    transform: var(--mdb-animation-slide-in-left-transform-from);
  }
  to {
    transform: var(--mdb-animation-slide-in-left-transform-to);
  }
}
.slide-in-left {
  --mdb-animation-slide-in-left-transform-from: translate3d(-100%, 0, 0);
  --mdb-animation-slide-in-left-transform-to: translate3d(0, 0, 0);
  animation-name: slide-in-left;
}
@keyframes slide-in-right {
  0% {
    visibility: visible;
    transform: var(--mdb-animation-slide-in-right-transform-from);
  }
  to {
    transform: var(--mdb-animation-slide-in-right-transform-to);
  }
}
.slide-in-right {
  --mdb-animation-slide-in-right-transform-from: translate3d(100%, 0, 0);
  --mdb-animation-slide-in-right-transform-to: translate3d(0, 0, 0);
  animation-name: slide-in-right;
}
@keyframes slide-in-up {
  0% {
    visibility: visible;
    transform: var(--mdb-animation-slide-in-up-transform-from);
  }
  to {
    transform: var(--mdb-animation-slide-in-up-transform-to);
  }
}
.slide-in-up {
  --mdb-animation-slide-in-up-transform-from: translate3d(0, 100%, 0);
  --mdb-animation-slide-in-up-transform-to: translate3d(0, 0, 0);
  animation-name: slide-in-up;
}
@keyframes slide-out-down {
  0% {
    transform: var(--mdb-animation-slide-out-down-transform-from);
  }
  to {
    visibility: hidden;
    transform: var(--mdb-animation-slide-out-down-transform-to);
  }
}
.slide-out-down {
  --mdb-animation-slide-out-down-transform-from: translate3d(0, 0, 0);
  --mdb-animation-slide-out-down-transform-to: translate3d(0, 100%, 0);
  animation-name: slide-out-down;
}
@keyframes slide-out-left {
  0% {
    transform: var(--mdb-animation-slide-out-left-transform-from);
  }
  to {
    visibility: hidden;
    transform: var(--mdb-animation-slide-out-left-transform-to);
  }
}
.slide-out-left {
  --mdb-animation-slide-out-left-transform-from: translate3d(0, 0, 0);
  --mdb-animation-slide-out-left-transform-to: translate3d(-100%, 0, 0);
  animation-name: slide-out-left;
}
@keyframes slide-out-right {
  0% {
    transform: var(--mdb-animation-slide-out-right-transform-from);
  }
  to {
    visibility: hidden;
    transform: var(--mdb-animation-slide-out-right-transform-to);
  }
}
.slide-out-right {
  --mdb-animation-slide-out-right-transform-from: translate3d(0, 0, 0);
  --mdb-animation-slide-out-right-transform-to: translate3d(100%, 0, 0);
  animation-name: slide-out-right;
}
@keyframes slide-out-up {
  0% {
    transform: var(--mdb-animation-slide-out-up-transform-from);
  }
  to {
    visibility: hidden;
    transform: var(--mdb-animation-slide-out-up-transform-to);
  }
}
.slide-out-up {
  --mdb-animation-slide-out-up-transform-from: translate3d(0, 0, 0);
  --mdb-animation-slide-out-up-transform-to: translate3d(0, -100%, 0);
  animation-name: slide-out-up;
}
@keyframes slide-down {
  0% {
    transform: var(--mdb-animation-slide-down-transform-from);
  }
  to {
    transform: var(--mdb-animation-slide-down-transform-to);
  }
}
.slide-down {
  --mdb-animation-slide-down-transform-from: translate3d(0, 0, 0);
  --mdb-animation-slide-down-transform-to: translate3d(0, 100%, 0);
  animation-name: slide-down;
}
@keyframes slide-left {
  0% {
    transform: var(--mdb-animation-slide-left-transform-from);
  }
  to {
    transform: var(--mdb-animation-slide-left-transform-to);
  }
}
.slide-left {
  --mdb-animation-slide-left-transform-from: translate3d(0, 0, 0);
  --mdb-animation-slide-left-transform-to: translate3d(-100%, 0, 0);
  animation-name: slide-left;
}
@keyframes slide-right {
  0% {
    transform: var(--mdb-animation-slide-right-transform-from);
  }
  to {
    transform: var(--mdb-animation-slide-right-transform-to);
  }
}
.slide-right {
  --mdb-animation-slide-right-transform-from: translate3d(0, 0, 0);
  --mdb-animation-slide-right-transform-to: translate3d(100%, 0, 0);
  animation-name: slide-right;
}
@keyframes slide-up {
  0% {
    transform: var(--mdb-animation-slide-up-transform-from);
  }
  to {
    transform: var(--mdb-animation-slide-up-transform-to);
  }
}
.slide-up {
  --mdb-animation-slide-up-transform-from: translate3d(0, 0, 0);
  --mdb-animation-slide-up-transform-to: translate3d(0, -100%, 0);
  animation-name: slide-up;
}
@keyframes zoom-in {
  0% {
    opacity: 0;
    transform: var(--mdb-animation-zoom-in-transform-from);
  }
  50% {
    opacity: 1;
  }
}
.zoom-in {
  --mdb-animation-zoom-in-transform-from: scale3d(0.3, 0.3, 0.3);
  animation-name: zoom-in;
}
@keyframes zoom-out {
  0% {
    opacity: 1;
  }
  50% {
    opacity: 0;
    transform: var(--mdb-animation-zoom-out-transform-50);
  }
  to {
    opacity: 0;
  }
}
.zoom-out {
  --mdb-animation-zoom-out-transform-50: scale3d(0.3, 0.3, 0.3);
  animation-name: zoom-out;
}
@keyframes tada {
  0% {
    transform: var(--mdb-animation-tada-transform-from);
  }
  10%,
  20% {
    transform: var(--mdb-animation-tada-transform-20);
  }
  30%,
  50%,
  70%,
  90% {
    transform: var(--mdb-animation-tada-transform-90);
  }
  40%,
  60%,
  80% {
    transform: var(--mdb-animation-tada-transform-80);
  }
  to {
    transform: var(--mdb-animation-tada-transform-to);
  }
}
.tada {
  --mdb-animation-tada-transform-from: scale3d(1, 1, 1);
  --mdb-animation-tada-transform-20: scale3d(0.9, 0.9, 0.9)
    rotate3d(0, 0, 1, -3deg);
  --mdb-animation-tada-transform-90: scale3d(1.1, 1.1, 1.1)
    rotate3d(0, 0, 1, 3deg);
  --mdb-animation-tada-transform-80: scale3d(1.1, 1.1, 1.1)
    rotate3d(0, 0, 1, -3deg);
  --mdb-animation-tada-transform-to: scale3d(1, 1, 1);
  animation-name: tada;
}
@keyframes pulse {
  0% {
    transform: var(--mdb-animation-pulse-transform-from);
  }
  50% {
    transform: var(--mdb-animation-pulse-transform-50);
  }
  to {
    transform: var(--mdb-animation-pulse-transform-to);
  }
}
.pulse {
  --mdb-animation-pulse-transform-from: scale3d(1, 1, 1);
  --mdb-animation-pulse-transform-50: scale3d(1.05, 1.05, 1.05);
  --mdb-animation-pulse-transform-to: scale3d(1, 1, 1);
  animation-name: pulse;
}
.stepper,
.steps,
.timeline {
  --mdb-steps-transition: height 0.2s ease-in-out;
  position: relative;
  padding: 0;
  margin: 0;
  width: 100%;
  list-style: none;
  overflow: hidden;
  transition: var(--mdb-steps-transition);
}
.stepper-vertical .stepper-step,
.steps-step,
.timeline-step {
  --mdb-steps-step-after-left: 2.45rem;
  --mdb-steps-step-after-width: 1px;
  --mdb-steps-step-after-margin-top: 0.5rem;
  --mdb-steps-step-after-bg: #dfdfdf;
  height: -webkit-fit-content;
  height: -moz-fit-content;
  height: fit-content;
  position: relative;
}
.stepper-vertical .stepper-step:not(:last-child):after,
.steps-step-after,
.timeline-step:after {
  position: absolute;
  left: var(--mdb-steps-step-after-left);
  width: var(--mdb-steps-step-after-width);
  margin-top: var(--mdb-steps-step-after-margin-top);
  content: "";
  background-color: var(--mdb-steps-step-after-bg);
}
.stepper-vertical .stepper-content,
.steps-content,
.timeline-content {
  --mdb-steps-content-padding-y: 1.5rem;
  overflow: hidden;
  padding-top: 0;
  padding-bottom: var(--mdb-steps-content-padding-y);
  padding-right: var(--mdb-steps-content-padding-y);
}
.stepper-vertical .stepper-head,
.steps-head-vertical,
.timeline-head {
  --mdb-steps-head-vertical-padding-top: 1.5rem;
  --mdb-steps-head-vertical-padding-x: 1.5rem;
  padding-left: var(--mdb-steps-head-vertical-padding-x);
  padding-right: var(--mdb-steps-head-vertical-padding-x);
  padding-top: var(--mdb-steps-head-vertical-padding-top);
}
.stepper-vertical .stepper-head-icon,
.steps-head-icon-vertical,
.timeline-head-icon {
  --mdb-steps-head-icon-vertical-margin-right: 0.75rem;
  margin-right: var(--mdb-steps-head-icon-vertical-margin-right);
}
.stepper-vertical .stepper-head-text:after,
.steps-head-text-after-vertical {
  position: absolute;
}
.stepper-head,
.steps-head,
.timeline-head {
  --mdb-steps-head-line-height: 1.3;
  --mdb-steps-head-hover-bgc: rgba(0, 0, 0, 0.025);
  display: flex;
  align-items: center;
  text-decoration: none;
  color: unset;
  line-height: var(--mdb-steps-head-line-height);
}
.stepper-head:hover,
.steps-head-hover {
  background-color: var(--mdb-steps-head-hover-bgc);
}
.stepper-head:focus,
.steps-head-focus {
  outline: none;
}
.stepper-head-text,
.steps-head-text,
.timeline-head-text {
  --mdb-steps-head-text-color: #757575;
  --mdb-steps-head-text-after-font-size: 0.8rem;
  color: var(--mdb-steps-head-text-color);
}
.stepper-head-text:after,
.steps-head-text-after,
.timeline-head-text:after {
  display: flex;
  font-size: var(--mdb-steps-head-text-after-font-size);
  content: attr(data-content);
}
.stepper-head-icon,
.steps-head-icon,
.timeline-head-icon {
  --mdb-steps-head-icon-font-size: 0.875rem;
  --mdb-steps-head-icon-width: 1.938rem;
  --mdb-steps-head-icon-height: 1.938rem;
  --mdb-steps-head-icon-font-weight: 500;
  display: flex;
  justify-content: center;
  align-items: center;
  border-radius: 100%;
  font-size: var(--mdb-steps-head-icon-font-size);
  width: var(--mdb-steps-head-icon-width);
  height: var(--mdb-steps-head-icon-height);
  font-weight: var(--mdb-steps-head-icon-font-weight);
}
.stepper-active .stepper-head-text,
.steps-active-head-text,
.timeline-head-text {
  --mdb-steps-active-head-text-font-weight: 500;
  font-weight: var(--mdb-steps-active-head-text-font-weight);
}
.stepper {
  --mdb-stepper-padding-x: 1rem;
  --mdb-stepper-step-height: 4.5rem;
  --mdb-stepper-step-head-padding-left: 1.5rem;
  --mdb-stepper-step-head-padding-right: 1.5rem;
  --mdb-stepper-step-head-height: 1px;
  --mdb-stepper-step-head-bg: rgba(0, 0, 0, 0.1);
  --mdb-stepper-step-head-margin-right: 0.5rem;
  --mdb-stepper-step-head-margin-left: 0.5rem;
  --mdb-stepper-head-icon-margin-y: 1.5rem;
  --mdb-stepper-head-icon-margin-right: 0.5rem;
  --mdb-stepper-vertical-step-top: 3.25rem;
  --mdb-stepper-vertical-step-height: calc(100% - 2.45rem);
  --mdb-stepper-vertical-content-padding-left: 3.75rem;
  --mdb-stepper-vertical-content-transition: height 0.3s ease-in-out,
    margin-top 0.3s ease-in-out, margin-bottom 0.3s ease-in-out,
    padding-top 0.3s ease-in-out, padding-bottom 0.3s ease-in-out;
  --mdb-stepper-vertical-head-padding-bottom: 1.5rem;
  --mdb-stepper-mobile-step-margin-y: 1rem;
  --mdb-stepper-mobile-step-head-padding-x: 0.25rem;
  --mdb-stepper-mobile-head-icon-height: 0.5rem;
  --mdb-stepper-mobile-head-icon-width: 0.5rem;
  --mdb-stepper-mobile-content-top: 2.56rem;
  --mdb-stepper-mobile-active-head-icon-bg: #376fc8;
  --mdb-stepper-mobile-completed-head-icon-bg: #139647;
  --mdb-stepper-head-icon-bg: #ebedef;
  --mdb-stepper-head-icon-color: #40464f;
  --mdb-stepper-completed-head-icon-bg: #d6f0e0;
  --mdb-stepper-completed-head-icon-color: #0d6832;
  --mdb-stepper-active-head-icon-bg: #dfe7f6;
  --mdb-stepper-active-head-icon-color: #2c58a0;
  --mdb-stepper-invalid-head-icon-bg: #f9e1e5;
  --mdb-stepper-invalid-head-icon-color: #af233a;
  --mdb-stepper-disabled-head-color: grey;
  --mdb-stepper-disabled-head-icon-bg: #e6e6e6;
  --mdb-stepper-disabled-head-icon-color: grey;
  --mdb-stepper-mobile-head-padding-y: 0.5rem;
  --mdb-stepper-mobile-head-padding-x: 1rem;
  --mdb-stepper-mobile-footer-height: 2.5rem;
  --mdb-stepper-back-btn-i-margin-right: 0.5rem;
  --mdb-stepper-next-btn-i-margin-left: 0.5rem;
  --mdb-stepper-mobile-progress-bar-height: 0.3rem;
  --mdb-stepper-mobile-progress-height: 0.3rem;
  --mdb-stepper-mobile-progress-background-color: #e0e0e0;
}
.stepper:not(.stepper-vertical) {
  display: flex;
  justify-content: space-between;
}
.stepper:not(.stepper-vertical) .stepper-content {
  position: absolute;
  width: 100%;
  padding-right: var(--mdb-stepper-padding-x);
  padding-left: var(--mdb-stepper-padding-x);
}
.stepper:not(.stepper-vertical) .stepper-step {
  flex: auto;
  height: var(--mdb-stepper-step-height);
}
.stepper:not(.stepper-vertical) .stepper-step:first-child .stepper-head {
  padding-left: var(--mdb-stepper-step-head-padding-left);
}
.stepper:not(.stepper-vertical) .stepper-step:last-child .stepper-head {
  padding-right: var(--mdb-stepper-step-head-padding-right);
}
.stepper:not(.stepper-vertical)
  .stepper-step:not(:first-child)
  .stepper-head:before {
  flex: 1;
  height: var(--mdb-stepper-step-head-height);
  width: 100%;
  margin-right: var(--mdb-stepper-step-head-margin-right);
  content: "";
  background-color: var(--mdb-stepper-step-head-bg);
}
.stepper:not(.stepper-vertical)
  .stepper-step:not(:last-child)
  .stepper-head:after {
  flex: 1;
  height: var(--mdb-stepper-step-head-height);
  width: 100%;
  margin-left: var(--mdb-stepper-step-head-margin-left);
  content: "";
  background-color: var(--mdb-stepper-step-head-bg);
}
.stepper:not(.stepper-vertical) .stepper-head-icon {
  margin-top: var(--mdb-stepper-head-icon-margin-y);
  margin-right: var(--mdb-stepper-head-icon-margin-right);
  margin-bottom: var(--mdb-stepper-head-icon-margin-y);
  margin-left: 0;
}
.stepper-vertical .stepper-step:not(:last-child):after {
  top: var(--mdb-stepper-vertical-step-top);
  height: var(--mdb-stepper-vertical-step-height);
}
.stepper-vertical .stepper-content {
  padding-left: var(--mdb-stepper-vertical-content-padding-left);
  transition: var(--mdb-stepper-vertical-content-transition);
}
.stepper-vertical .stepper-content-hide {
  margin-top: 0 !important;
  margin-bottom: 0 !important;
  padding-top: 0 !important;
  padding-bottom: 0 !important;
  height: 0 !important;
}
.stepper-vertical .stepper-head {
  padding-bottom: var(--mdb-stepper-vertical-head-padding-bottom);
}
.stepper.stepper-mobile {
  justify-content: center;
  align-items: flex-end;
}
.stepper.stepper-mobile.stepper-progress-bar .stepper-head-icon {
  display: none;
}
.stepper.stepper-mobile .stepper-step {
  flex: unset;
  height: -webkit-fit-content;
  height: -moz-fit-content;
  height: fit-content;
  margin-top: var(--mdb-stepper-mobile-step-margin-y);
  margin-bottom: var(--mdb-stepper-mobile-step-margin-y);
}
.stepper.stepper-mobile .stepper-step:not(:last-child) .stepper-head:after {
  margin-left: 0;
}
.stepper.stepper-mobile .stepper-step:not(:first-child) .stepper-head:before {
  margin-right: 0;
}
.stepper.stepper-mobile
  .stepper-step:not(:last-child):not(:first-child)
  .stepper-head {
  padding-left: var(--mdb-stepper-mobile-step-head-padding-x);
  padding-right: var(--mdb-stepper-mobile-step-head-padding-x);
}
.stepper.stepper-mobile .stepper-head-icon {
  font-size: 0;
  margin: 0;
  height: var(--mdb-stepper-mobile-head-icon-height);
  width: var(--mdb-stepper-mobile-head-icon-width);
  z-index: 1;
}
.stepper.stepper-mobile .stepper-head-text {
  display: none;
}
.stepper.stepper-mobile .stepper-content {
  top: var(--mdb-stepper-mobile-content-top);
}
.stepper.stepper-mobile .stepper-active .stepper-head-icon {
  background-color: var(--mdb-stepper-mobile-active-head-icon-bg);
}
.stepper.stepper-mobile .stepper-completed .stepper-head-icon {
  background-color: var(--mdb-stepper-mobile-completed-head-icon-bg);
}
.stepper-form {
  display: inherit;
  justify-content: inherit;
  width: inherit;
  position: inherit;
}
.stepper-content {
  left: 0;
}
.stepper-head {
  cursor: pointer;
}
.stepper-head-icon {
  background-color: var(--mdb-stepper-head-icon-bg);
  color: var(--mdb-stepper-head-icon-color);
}
.stepper-completed .stepper-head-icon {
  background-color: var(--mdb-stepper-completed-head-icon-bg);
  color: var(--mdb-stepper-completed-head-icon-color);
}
.stepper-active .stepper-content {
  display: block;
}
.stepper-active .stepper-head-icon {
  background-color: var(--mdb-stepper-active-head-icon-bg);
  color: var(--mdb-stepper-active-head-icon-color);
}
.stepper-invalid .stepper-head-icon {
  background-color: var(--mdb-stepper-invalid-head-icon-bg);
  color: var(--mdb-stepper-invalid-head-icon-color);
}
.stepper-disabled .stepper-head {
  color: var(--mdb-stepper-disabled-head-color);
  cursor: default;
}
.stepper-disabled .stepper-head-icon {
  background-color: var(--mdb-stepper-disabled-head-icon-bg);
  color: var(--mdb-stepper-disabled-head-icon-color);
}
.stepper-mobile-head {
  position: absolute;
  align-self: normal;
  height: -webkit-fit-content;
  height: -moz-fit-content;
  height: fit-content;
  width: 100%;
  padding: var(--mdb-stepper-mobile-head-padding-y)
    var(--mdb-stepper-mobile-head-padding-x);
}
.stepper-mobile-footer {
  position: absolute;
  display: flex;
  justify-content: space-between;
  align-items: center;
  width: 100%;
  height: var(--mdb-stepper-mobile-footer-height);
}
.stepper-back-btn {
  display: block;
  left: 0;
}
.stepper-back-btn .btn-link {
  color: unset;
}
.stepper-back-btn i {
  margin-right: var(--mdb-stepper-back-btn-i-margin-right);
}
.stepper-next-btn {
  display: block;
  right: 0;
}
.stepper-next-btn .btn-link {
  color: unset;
}
.stepper-next-btn i {
  margin-left: var(--mdb-stepper-next-btn-i-margin-left);
}
.stepper-mobile-progress-bar {
  height: var(--mdb-stepper-mobile-progress-bar-height);
  width: 0;
}
.stepper-mobile-progress {
  height: var(--mdb-stepper-mobile-progress-height);
  flex-grow: 100;
  background-color: var(--mdb-stepper-mobile-progress-background-color);
}
.timeline {
  --mdb-timeline-step-top: 2.94rem;
  --mdb-timeline-step-height: calc(100% - 1.94rem);
  --mdb-timeline-content-padding-left: 4.25rem;
  --mdb-timeline-head-padding-bottom: 0.5rem;
  --mdb-timeline-step-sm-left: 1.8rem;
  --mdb-timeline-step-sm-top: 2rem;
  --mdb-timeline-head-sm-margin-right: 1rem;
  --mdb-timeline-head-sm-bg: #dfdfdf;
  --mdb-timeline-head-sm-height: 0.7rem;
  --mdb-timeline-head-sm-width: 0.7rem;
  --mdb-timeline-content-sm-padding-left: 3.25rem;
}
.timeline-step:after {
  top: var(--mdb-timeline-step-top);
  height: var(--mdb-timeline-step-height);
}
.timeline-content {
  padding-left: var(--mdb-timeline-content-padding-left);
}
.timeline-head {
  padding-bottom: var(--mdb-timeline-head-padding-bottom);
}
.timeline-step-sm:after {
  left: var(--mdb-timeline-step-sm-left);
  height: 100%;
  top: var(--mdb-timeline-step-sm-top);
}
.timeline-head-sm {
  margin-right: var(--mdb-timeline-head-sm-margin-right);
  background-color: var(--mdb-timeline-head-sm-bg);
  border-radius: 100%;
  height: var(--mdb-timeline-head-sm-height);
  width: var(--mdb-timeline-head-sm-width);
}
.timeline-content-sm {
  padding-left: var(--mdb-timeline-content-sm-padding-left);
}
.select-dropdown .form-check-input label {
  display: block;
}
select.select-initialized {
  display: none !important;
}
.select-wrapper {
  --mdb-form-outline-select-arrow-color: #000;
  --mdb-form-outline-select-arrow-font-size: 0.8rem;
  --mdb-form-outline-select-arrow-top: 9px;
  --mdb-form-outline-select-arrow-right: 9px;
  --mdb-form-outline-select-valid-color: #00b74a;
  --mdb-form-outline-select-invalid-color: #f93154;
  --mdb-form-outline-select-clear-btn-color: #000;
  --mdb-form-outline-select-clear-btn-font-size: 1rem;
  --mdb-form-outline-select-clear-btn-top: 7px;
  --mdb-form-outline-select-clear-btn-right: 27px;
  --mdb-form-outline-select-clear-btn-focus-color: #3b71ca;
  --mdb-form-outline-select-sm-clear-btn-font-size: 0.8rem;
  --mdb-form-outline-select-sm-clear-btn-top: 4px;
  --mdb-form-outline-select-lg-clear-btn-top: 11px;
  --mdb-form-outline-select-label-max-width: 80%;
  --mdb-form-outline-select-label-active-transform: translateY(-1rem)
    translateY(0.1rem) scale(0.8);
  --mdb-form-outline-select-lg-label-active-transform: translateY(-1.25rem)
    translateY(0.1rem) scale(0.8);
  --mdb-form-outline-select-sm-label-active-transform: translateY(-0.83rem)
    translateY(0.1rem) scale(0.8);
  --mdb-form-outline-select-input-focused-color: #616161;
  --mdb-form-outline-select-label-color: #3b71ca;
  --mdb-form-outline-select-notch-border-color: #3b71ca;
  --mdb-form-outline-select-input-focused-arrow-color: #3b71ca;
  --mdb-form-outline-select-white-focus-arrow-color: #fff;
  --mdb-form-outline-select-white-arrow-color: #fff;
  --mdb-form-outline-select-white-clear-btn: #fff;
  --mdb-form-outline-select-sm-arrow-top: 3px;
  --mdb-form-outline-select-lg-arrow-top: 13px;
  --mdb-form-outline-form-notch-border-top: 1px solid transparent;
}
.select-arrow {
  color: var(--mdb-form-outline-select-arrow-color);
  text-align: center;
  font-size: var(--mdb-form-outline-select-arrow-font-size);
  position: absolute;
  top: var(--mdb-form-outline-select-arrow-top);
  right: var(--mdb-form-outline-select-arrow-right);
}
.select-arrow:before {
  content: "â–¼";
}
.was-validated .form-control:valid ~ .select-arrow {
  color: var(--mdb-form-outline-select-valid-color);
}
.was-validated .form-control:invalid ~ .select-arrow {
  color: var(--mdb-form-outline-select-invalid-color);
}
.select-clear-btn {
  color: var(--mdb-form-outline-select-clear-btn-color);
  font-size: var(--mdb-form-outline-select-clear-btn-font-size);
  position: absolute;
  top: var(--mdb-form-outline-select-clear-btn-top);
  right: var(--mdb-form-outline-select-clear-btn-right);
  cursor: pointer;
}
.select-clear-btn:focus {
  color: var(--mdb-form-outline-select-clear-btn-focus-color);
  outline: none;
}
.form-control-sm ~ .select-clear-btn {
  font-size: var(--mdb-form-outline-select-sm-clear-btn-font-size);
  top: var(--mdb-form-outline-select-sm-clear-btn-top);
}
.form-control-lg ~ .select-clear-btn {
  top: var(--mdb-form-outline-select-lg-clear-btn-top);
}
.select-dropdown-container {
  --mdb-form-outline-select-dropdown-container-z-index: 1070;
  --mdb-form-outline-select-dropdown-bg: #fff;
  --mdb-form-outline-select-dropdown-box-shadow: 0 2px 5px 0 rgba(0, 0, 0, 0.16),
    0 2px 10px 0 rgba(0, 0, 0, 0.12);
  --mdb-form-outline-select-dropdown-min-width: 100px;
  --mdb-form-outline-select-dropdown-transform: scaleY(0.8);
  --mdb-form-outline-select-dropdown-transition: all 0.2s;
  --mdb-form-outline-select-dropdown-open-transform: scaleY(1);
  --mdb-form-outline-select-dropdown-input-group-padding: 10px;
  --mdb-form-outline-select-options-wrapper-scrollbar-width: 4px;
  --mdb-form-outline-select-options-wrapper-scrollbar-height: 4px;
  --mdb-form-outline-select-options-wrapper-scrollbar-border-bottom-right-radius: 4px;
  --mdb-form-outline-select-options-wrapper-scrollbar-border-bottom-left-radius: 4px;
  --mdb-form-outline-select-options-wrapper-scrollbar-thumb-height: 50px;
  --mdb-form-outline-select-options-wrapper-scrollbar-thumb-bg: #999;
  --mdb-form-outline-select-options-wrapper-scrollbar-thumb-border-radius: 4px;
  z-index: var(--mdb-form-outline-select-dropdown-container-z-index);
}
.select-dropdown {
  background-color: var(--mdb-form-outline-select-dropdown-bg);
  box-shadow: var(--mdb-form-outline-select-dropdown-box-shadow);
  margin: 0;
  min-width: var(--mdb-form-outline-select-dropdown-min-width);
  outline: 0;
  position: relative;
  transform: var(--mdb-form-outline-select-dropdown-transform);
  opacity: 0;
  transition: var(--mdb-form-outline-select-dropdown-transition);
}
.select-dropdown.open {
  transform: var(--mdb-form-outline-select-dropdown-open-transform);
  opacity: 1;
}
.select-dropdown > .input-group {
  padding: var(--mdb-form-outline-select-dropdown-input-group-padding);
}
.select-label {
  max-width: var(--mdb-form-outline-select-label-max-width);
  overflow: hidden;
  text-overflow: ellipsis;
  white-space: nowrap;
}
.select-label.active {
  transform: var(--mdb-form-outline-select-label-active-transform);
}
.form-control-lg ~ .select-label.active {
  transform: var(--mdb-form-outline-select-lg-label-active-transform);
}
.form-control-sm ~ .select-label.active {
  transform: var(--mdb-form-outline-select-sm-label-active-transform);
}
.form-outline .select-label.active ~ .form-notch .form-notch-middle {
  border-right: none;
  border-left: none;
  border-top: var(--mdb-form-outline-form-notch-border-top);
}
.select-input {
  cursor: pointer;
}
.select-input[disabled] {
  cursor: default;
}
.form-outline .form-control.select-input:focus,
.select-input.focused {
  color: var(--mdb-form-outline-select-input-focused-color);
  outline: 0;
}
.form-outline .form-control.select-input:focus ~ .select-label,
.select-input.focused ~ .select-label {
  color: var(--mdb-form-outline-select-label-color);
}
.form-outline .form-control.select-input:focus::-moz-placeholder,
.select-input.focused::-moz-placeholder {
  opacity: 1;
}
.form-outline .form-control.select-input:focus::placeholder,
.select-input.focused::placeholder {
  opacity: 1;
}
.form-outline
  .form-control.select-input:focus
  ~ .form-notch
  .form-notch-leading,
.select-input.focused ~ .form-notch .form-notch-leading {
  border-color: var(--mdb-form-outline-select-notch-border-color);
  box-shadow: -1px 0 0 0 var(--mdb-form-outline-select-notch-border-color),
    0 1px 0 0 var(--mdb-form-outline-select-notch-border-color),
    0 -1px 0 0 var(--mdb-form-outline-select-notch-border-color);
}
.form-outline .form-control.select-input:focus ~ .form-notch .form-notch-middle,
.select-input.focused ~ .form-notch .form-notch-middle {
  border-top: var(--mdb-form-outline-form-notch-border-top);
  border-color: var(--mdb-form-outline-select-notch-border-color);
  box-shadow: 0 1px 0 0 var(--mdb-form-outline-select-notch-border-color);
}
.form-outline
  .form-control.select-input:focus
  ~ .form-notch
  .form-notch-trailing,
.select-input.focused ~ .form-notch .form-notch-trailing {
  border-color: var(--mdb-form-outline-select-notch-border-color);
  box-shadow: 1px 0 0 0 var(--mdb-form-outline-select-notch-border-color),
    0 -1px 0 0 var(--mdb-form-outline-select-notch-border-color),
    0 1px 0 0 var(--mdb-form-outline-select-notch-border-color);
}
.select-input.focused ~ .select-arrow {
  color: var(--mdb-form-outline-select-input-focused-arrow-color);
}
.form-white .select-input:focus ~ .select-arrow {
  color: var(--mdb-form-outline-select-white-focus-arrow-color);
}
.form-white .select-arrow {
  color: var(--mdb-form-outline-select-white-arrow-color);
}
.form-white .select-clear-btn {
  color: var(--mdb-form-outline-select-white-clear-btn);
}
.form-control-sm ~ .select-arrow {
  top: var(--mdb-form-outline-select-sm-arrow-top);
}
.form-control-lg ~ .select-arrow {
  top: var(--mdb-form-outline-select-lg-arrow-top);
}
.select-options-wrapper {
  overflow-y: auto;
}
.select-options-wrapper::-webkit-scrollbar {
  width: var(--mdb-form-outline-select-options-wrapper-scrollbar-width);
  height: var(--mdb-form-outline-select-options-wrapper-scrollbar-height);
}
.select-options-wrapper::-webkit-scrollbar-button:end:increment,
.select-options-wrapper::-webkit-scrollbar-button:start:decrement {
  display: block;
  height: 0;
  background-color: transparent;
}
.select-options-wrapper::-webkit-scrollbar-track-piece {
  background-color: transparent;
  border-radius: 0;
  border-bottom-right-radius: var(
    --mdb-form-outline-select-options-wrapper-scrollbar-border-bottom-right-radius
  );
  border-bottom-left-radius: var(
    --mdb-form-outline-select-options-wrapper-scrollbar-border-bottom-left-radius
  );
}
.select-options-wrapper::-webkit-scrollbar-thumb:vertical {
  height: var(--mdb-form-outline-select-options-wrapper-scrollbar-thumb-height);
  background-color: var(
    --mdb-form-outline-select-options-wrapper-scrollbar-thumb-bg
  );
  border-radius: var(
    --mdb-form-outline-select-options-wrapper-scrollbar-thumb-border-radius
  );
}
.select-options-list {
  list-style: none;
  margin: 0;
  padding: 0;
}
.select-option-group-label {
  --mdb-form-outline-select-option-group-label-padding-left: 16px;
  --mdb-form-outline-select-option-group-label-padding-right: 16px;
  --mdb-form-outline-select-option-group-label-font-size: 1rem;
  --mdb-form-outline-select-option-group-label-font-weight: 400;
  --mdb-form-outline-select-option-group-label-color: rgba(0, 0, 0, 0.54);
  width: 100%;
  white-space: nowrap;
  text-overflow: ellipsis;
  overflow: hidden;
  display: flex;
  flex-direction: row;
  align-items: center;
  padding-left: var(--mdb-form-outline-select-option-group-label-padding-left);
  padding-right: var(
    --mdb-form-outline-select-option-group-label-padding-right
  );
  font-size: var(--mdb-form-outline-select-option-group-label-font-size);
  font-weight: var(--mdb-form-outline-select-option-group-label-font-weight);
  background-color: transparent;
  color: var(--mdb-form-outline-select-option-group-label-color);
  -webkit-user-select: none;
  -moz-user-select: none;
  user-select: none;
}
.select-option-group > .select-option {
  --mdb-form-outline-select-option-group-select-option-padding-left: 26px;
  padding-left: var(
    --mdb-form-outline-select-option-group-select-option-padding-left
  );
}
.select-option {
  --mdb-form-outline-select-option-color: rgba(0, 0, 0, 0.87);
  --mdb-form-outline-select-option-padding-left: 16px;
  --mdb-form-outline-select-option-padding-right: 16px;
  --mdb-form-outline-select-option-font-size: 1rem;
  --mdb-form-outline-select-option-font-weight: 400;
  --mdb-form-outline-select-option-hover-not-disabled-bg: rgba(0, 0, 0, 0.048);
  --mdb-form-outline-select-option-active-bg: rgba(0, 0, 0, 0.048);
  --mdb-form-outline-select-option-selected-active-bg: rgba(0, 0, 0, 0.048);
  --mdb-form-outline-select-option-selected-disabled-color: #9e9e9e;
  --mdb-form-outline-select-option-selected-bg: rgba(0, 0, 0, 0.02);
  --mdb-form-outline-select-option-disabled-color: #9e9e9e;
  --mdb-form-outline-select-option-text-form-check-input-margin-right: 10px;
  --mdb-form-outline-select-option-secondary-text-font-size: 0.8rem;
  --mdb-form-outline-select-option-secondary-text-color: #6c757d;
  --mdb-form-outline-select-option-icon-width: 28px;
  --mdb-form-outline-select-option-icon-height: 28px;
  --mdb-form-outline-select-no-results-padding-left: 16px;
  --mdb-form-outline-select-no-results-padding-right: 16px;
  --mdb-form-outline-select-white-arrow: #fff;
  width: 100%;
  white-space: nowrap;
  text-overflow: ellipsis;
  overflow: hidden;
  cursor: pointer;
  display: flex;
  flex-direction: row;
  align-items: center;
  justify-content: space-between;
  color: var(--mdb-form-outline-select-option-color);
  padding-left: var(--mdb-form-outline-select-option-padding-left);
  padding-right: var(--mdb-form-outline-select-option-padding-right);
  font-size: var(--mdb-form-outline-select-option-font-size);
  font-weight: var(--mdb-form-outline-select-option-font-weight);
  background-color: transparent;
  -webkit-user-select: none;
  -moz-user-select: none;
  user-select: none;
}
.select-option:hover:not(.disabled) {
  background-color: var(--mdb-form-outline-select-option-hover-not-disabled-bg);
}
.select-option.active {
  background-color: var(--mdb-form-outline-select-option-active-bg);
}
.select-option.selected.active {
  background-color: var(--mdb-form-outline-select-option-selected-active-bg);
}
.select-option.selected.disabled {
  cursor: default;
  color: var(--mdb-form-outline-select-option-selected-disabled-color);
  background-color: transparent;
}
.select-option.selected {
  background-color: var(--mdb-form-outline-select-option-selected-bg);
}
.select-option.disabled {
  cursor: default;
  color: var(--mdb-form-outline-select-option-disabled-color);
}
.select-option-text .form-check-input {
  margin-right: var(
    --mdb-form-outline-select-option-text-form-check-input-margin-right
  );
}
.select-option-secondary-text {
  font-size: var(--mdb-form-outline-select-option-secondary-text-font-size);
  color: var(--mdb-form-outline-select-option-secondary-text-color);
  display: block;
  line-height: normal;
}
.select-option-icon {
  width: var(--mdb-form-outline-select-option-icon-width);
  height: var(--mdb-form-outline-select-option-icon-height);
}
.select-custom-content {
  --mdb-form-outline-select-custom-content-padding: 16px;
  padding: var(--mdb-form-outline-select-custom-content-padding);
}
.select-no-results {
  padding-left: var(--mdb-form-outline-select-no-results-padding-left);
  padding-right: var(--mdb-form-outline-select-no-results-padding-right);
  display: flex;
  align-items: center;
}
.form-white .select-input.focused ~ .select-arrow {
  color: var(--mdb-form-outline-select-white-arrow-color);
}
.form-outline .form-control.active ~ .form-label.select-fake-value,
.form-outline .form-control:focus ~ .form-label.select-fake-value,
.form-outline .form-control ~ .form-label.select-fake-value {
  transform: none;
  display: none;
}
.form-outline .form-control.active ~ .form-label.select-fake-value.active,
.form-outline .form-control:focus ~ .form-label.select-fake-value.active,
.form-outline .form-control ~ .form-label.select-fake-value.active {
  display: block;
}
code[class*="language-"],
pre[class*="language-"] {
  color: #000;
  background: none;
  text-shadow: 0 1px #fff;
  font-family: Consolas, Monaco, Andale Mono, Ubuntu Mono, monospace;
  text-align: left;
  white-space: pre;
  word-spacing: normal;
  word-break: normal;
  word-wrap: normal;
  line-height: 1.5;
  -moz-tab-size: 4;
  -o-tab-size: 4;
  tab-size: 4;
  -webkit-hyphens: none;
  hyphens: none;
}
code[class*="language-"]::-moz-selection,
code[class*="language-"] ::-moz-selection,
pre[class*="language-"]::-moz-selection,
pre[class*="language-"] ::-moz-selection {
  text-shadow: none;
  background: #b3d4fc;
}
code[class*="language-"]::selection,
code[class*="language-"] ::selection,
pre[class*="language-"]::selection,
pre[class*="language-"] ::selection {
  text-shadow: none;
  background: #b3d4fc;
}
@media print {
  code[class*="language-"],
  pre[class*="language-"] {
    text-shadow: none;
  }
}
pre[class*="language-"] {
  padding: 1em;
  margin: 0.5em 0;
  overflow: auto;
}
:not(pre) > code[class*="language-"],
pre[class*="language-"] {
  background: #f5f2f0;
}
:not(pre) > code[class*="language-"] {
  padding: 0.1em;
  border-radius: 0.3em;
  white-space: normal;
}
.token.cdata,
.token.comment,
.token.doctype,
.token.prolog {
  color: #708090;
}
.token.punctuation {
  color: #999;
}
.namespace {
  opacity: 0.7;
}
.token.boolean,
.token.constant,
.token.deleted,
.token.number,
.token.property,
.token.symbol,
.token.tag {
  color: #905;
}
.token.attr-name,
.token.builtin,
.token.char,
.token.inserted,
.token.selector,
.token.string {
  color: #690;
}
.language-css .token.string,
.style .token.string,
.token.entity,
.token.operator,
.token.url {
  color: #9a6e3a;
  background: hsla(0, 0%, 100%, 0.5);
}
.token.atrule,
.token.attr-value,
.token.keyword {
  color: #07a;
}
.token.class-name,
.token.function {
  color: #dd4a68;
}
.token.important,
.token.regex,
.token.variable {
  color: #e90;
}
.token.bold,
.token.important {
  font-weight: 700;
}
.token.italic {
  font-style: italic;
}
.token.entity {
  cursor: help;
}
pre.line-numbers {
  padding-left: 3.8em;
}
.line-numbers .type-terminal .line-numbers-rows {
  border-right: none;
  top: -0.2em;
}
.type-terminal .line-numbers-rows > span:before {
  content: "$";
}
.prism-previewer,
.prism-previewer:after,
.prism-previewer:before {
  position: absolute;
  pointer-events: none;
}
.prism-previewer,
.prism-previewer:after {
  left: 50%;
}
.prism-previewer {
  margin-top: -48px;
  width: 32px;
  height: 32px;
  margin-left: -16px;
  opacity: 0;
  transition: opacity 0.25s;
}
.prism-previewer.flipped {
  margin-top: 0;
  margin-bottom: -48px;
}
.prism-previewer:after,
.prism-previewer:before {
  content: "";
  position: absolute;
  pointer-events: none;
}
.prism-previewer:before {
  top: -5px;
  right: -5px;
  left: -5px;
  bottom: -5px;
  border-radius: 10px;
  border: 5px solid #fff;
  box-shadow: inset 0 0 3px rgba(0, 0, 0, 0.5), 0 0 10px rgba(0, 0, 0, 0.75);
}
.prism-previewer:after {
  top: 100%;
  width: 0;
  height: 0;
  margin: 5px 0 0 -7px;
  border: 7px solid rgba(255, 0, 0, 0);
  border-top-color: #fff;
}
.prism-previewer.flipped:after {
  top: auto;
  bottom: 100%;
  margin-top: 0;
  margin-bottom: 5px;
  border-top-color: rgba(255, 0, 0, 0);
  border-bottom-color: #fff;
}
.prism-previewer.active {
  opacity: 1;
}
.prism-previewer-angle:before {
  border-radius: 50%;
  background: #fff;
}
.prism-previewer-angle:after {
  margin-top: 4px;
}
.prism-previewer-angle svg {
  width: 32px;
  height: 32px;
  transform: rotate(-90deg);
}
.prism-previewer-angle[data-negative] svg {
  transform: scaleX(-1) rotate(-90deg);
}
.prism-previewer-angle circle {
  fill: transparent;
  stroke: #2e3538;
  stroke-opacity: 0.9;
  stroke-width: 32;
  stroke-dasharray: 0, 500;
}
.prism-previewer-gradient {
  background-image: linear-gradient(
      45deg,
      #bbb 25%,
      transparent 0,
      transparent 75%,
      #bbb 0,
      #bbb
    ),
    linear-gradient(45deg, #bbb 25%, #eee 0, #eee 75%, #bbb 0, #bbb);
  background-size: 10px 10px;
  background-position: 0 0, 5px 5px;
  width: 64px;
  margin-left: -32px;
}
.prism-previewer-gradient:before {
  content: none;
}
.prism-previewer-gradient div {
  position: absolute;
  top: -5px;
  left: -5px;
  right: -5px;
  bottom: -5px;
  border-radius: 10px;
  border: 5px solid #fff;
  box-shadow: inset 0 0 3px rgba(0, 0, 0, 0.5), 0 0 10px rgba(0, 0, 0, 0.75);
}
.prism-previewer-color {
  background-image: linear-gradient(
      45deg,
      #bbb 25%,
      transparent 0,
      transparent 75%,
      #bbb 0,
      #bbb
    ),
    linear-gradient(45deg, #bbb 25%, #eee 0, #eee 75%, #bbb 0, #bbb);
  background-size: 10px 10px;
  background-position: 0 0, 5px 5px;
}
.prism-previewer-color:before {
  background-color: inherit;
  background-clip: padding-box;
}
.prism-previewer-easing {
  margin-top: -76px;
  margin-left: -30px;
  width: 60px;
  height: 60px;
  background: #333;
}
.prism-previewer-easing.flipped {
  margin-bottom: -116px;
}
.prism-previewer-easing svg {
  width: 60px;
  height: 60px;
}
.prism-previewer-easing circle {
  fill: #2e3538;
  stroke: #fff;
}
.prism-previewer-easing path {
  fill: none;
  stroke: #fff;
  stroke-linecap: round;
  stroke-width: 4;
}
.prism-previewer-easing line {
  stroke: #fff;
  stroke-opacity: 0.5;
  stroke-width: 2;
}
@keyframes prism-previewer-time {
  0% {
    stroke-dasharray: 0, 500;
    stroke-dashoffset: 0;
  }
  50% {
    stroke-dasharray: 100, 500;
    stroke-dashoffset: 0;
  }
  to {
    stroke-dasharray: 0, 500;
    stroke-dashoffset: -100;
  }
}
.prism-previewer-time:before {
  border-radius: 50%;
  background: #fff;
}
.prism-previewer-time:after {
  margin-top: 4px;
}
.prism-previewer-time svg {
  width: 32px;
  height: 32px;
  transform: rotate(-90deg);
}
.prism-previewer-time circle {
  fill: transparent;
  stroke: #2e3538;
  stroke-opacity: 0.9;
  stroke-width: 32;
  stroke-dasharray: 0, 500;
  stroke-dashoffset: 0;
  animation: prism-previewer-time 3s linear infinite;
}
.docs-pills .d-flex.justify-content-between {
  border-bottom: 1px solid #e0e0e0 !important;
}
.docs-pills .nav {
  border-bottom: 0 !important;
}
.docs-pills .btn-group-sm > .btn[class*="btn-outline-"],
.docs-pills .btn.btn-sm[class*="btn-outline-"] {
  margin-top: 0.1rem !important;
  padding-left: 1rem !important;
  padding-right: 1rem !important;
}
.docs-pills .nav-pills .nav-link {
  padding: 10px 20px;
  margin: 0 5px;
}
.docs-pills .nav-item .active {
  background-color: #e3ebf7 !important;
  color: #285192 !important;
}
.docs-pills .tab-content {
  padding: 0;
}
.docs-pills .btn-copy-code,
.docs-pills .export-to-snippet {
  position: absolute;
  top: 9px;
  right: 8px;
  color: #616162 !important;
  padding: 6px 15px !important;
}
.docs-pills {
  position: relative !important;
}
.docs-pills pre[class*="language-"] {
  margin-top: 0;
}
pre.line-numbers {
  position: relative;
  padding-left: 3.8em !important;
  counter-reset: linenumber;
}
pre.line-numbers > code {
  position: relative;
  white-space: inherit;
}
.line-numbers .line-numbers-rows {
  position: absolute;
  pointer-events: none;
  top: 0;
  font-size: 100%;
  left: -3.8em;
  width: 3em;
  letter-spacing: -1px;
  border-right: 1px solid #999;
  -webkit-user-select: none;
  -moz-user-select: none;
  user-select: none;
}
.line-numbers-rows > span {
  pointer-events: none;
  display: block;
  counter-increment: linenumber;
}
.line-numbers-rows > span:before {
  content: counter(linenumber);
  color: #999;
  display: block;
  padding-right: 0.8em;
  text-align: right;
}
.code-toolbar {
  margin: 0;
}
code[class*="language-"],
pre[class*="language-"] {
  max-height: 450px;
}
#mdb-footer {
  padding-left: 240px;
}
@media (max-width: 1439px) {
  #mdb-footer {
    padding-left: 0;
  }
}
#mdb-intro {
  padding-left: 240px;
  margin-top: 58.51px;
}
@media (max-width: 1439px) {
  #mdb-intro {
    padding-left: 0;
  }
}
.name-product{
    font-weight: bold;
}
.color-product{
    margin-top: 20px;
}
.detail-product{
    border: none;
    border-radius: 4px;
    padding: 5px 30px;
    margin-top: 10px;
    background-color: #1a2e83;
    color: #fff;
}
.delivery{
    border-top: 1px solid #ddd;
}
.logo{
    background: #1a2e83;
}
.header-logo a {
    background: url({{ asset("storage/uploads/$logo") }});
    /* background-position: 0 -82px; */
    background-repeat: no-repeat;
    background-size: contain;
    background-position: center;
    display: block;
    height: 60px;
    width: 165px;
  }
  .footer-copyright{
    border-top: 1px solid #ddd;
    padding-top: 1rem;
  }
  .article-social .item {
    align-items: center;
    color: #1a2e83;
    display: inline-flex;
    justify-content: center;
    margin: 0 15px;
    width: 16px;
}
.article-social .item i{
    font-size: 20px;
}
.title-contact{
    color: #1a2e83;
    margin-bottom: 1rem;
}
.article-social
{
    margin-bottom: 1rem;
}
  /*!
 * Font Awesome Free 6.1.1 by @fontawesome - https://fontawesome.com
 * License - https://fontawesome.com/license/free (Icons: CC BY 4.0, Fonts: SIL OFL 1.1, Code: MIT License)
 * Copyright 2022 Fonticons, Inc.
 */
.fa {
  font-family: var(--fa-style-family, "Font Awesome 6 Free");
  font-weight: var(--fa-style, 900);
}
.fa,
.fa-brands,
.fa-duotone,
.fa-light,
.fa-regular,
.fa-solid,
.fa-thin,
.fab,
.fad,
.fal,
.far,
.fas,
.fat {
  -moz-osx-font-smoothing: grayscale;
  -webkit-font-smoothing: antialiased;
  display: var(--fa-display, inline-block);
  font-style: normal;
  font-variant: normal;
  line-height: 1;
  text-rendering: auto;
}
.fa-1x {
  font-size: 1em;
}
.fa-2x {
  font-size: 2em;
}
.fa-3x {
  font-size: 3em;
}
.fa-4x {
  font-size: 4em;
}
.fa-5x {
  font-size: 5em;
}
.fa-6x {
  font-size: 6em;
}
.fa-7x {
  font-size: 7em;
}
.fa-8x {
  font-size: 8em;
}
.fa-9x {
  font-size: 9em;
}
.fa-10x {
  font-size: 10em;
}
.fa-2xs {
  font-size: 0.625em;
  line-height: 0.1em;
  vertical-align: 0.225em;
}
.fa-xs {
  font-size: 0.75em;
  line-height: 0.08333em;
  vertical-align: 0.125em;
}
.fa-sm {
  font-size: 0.875em;
  line-height: 0.07143em;
  vertical-align: 0.05357em;
}
.fa-lg {
  font-size: 1.25em;
  line-height: 0.05em;
  vertical-align: -0.075em;
}
.fa-xl {
  font-size: 1.5em;
  line-height: 0.04167em;
  vertical-align: -0.125em;
}
.fa-2xl {
  font-size: 2em;
  line-height: 0.03125em;
  vertical-align: -0.1875em;
}
.fa-fw {
  text-align: center;
  width: 1.25em;
}
.fa-ul {
  list-style-type: none;
  margin-left: var(--fa-li-margin, 2.5em);
  padding-left: 0;
}
.fa-ul > li {
  position: relative;
}
.fa-li {
  left: calc(var(--fa-li-width, 2em) * -1);
  position: absolute;
  text-align: center;
  width: var(--fa-li-width, 2em);
  line-height: inherit;
}
.fa-border {
  border-radius: var(--fa-border-radius, 0.1em);
  border: var(--fa-border-width, 0.08em) var(--fa-border-style, solid)
    var(--fa-border-color, #eee);
  padding: var(--fa-border-padding, 0.2em 0.25em 0.15em);
}
.fa-pull-left {
  float: left;
  margin-right: var(--fa-pull-margin, 0.3em);
}
.fa-pull-right {
  float: right;
  margin-left: var(--fa-pull-margin, 0.3em);
}
.fa-beat {
  -webkit-animation-name: fa-beat;
  animation-name: fa-beat;
  -webkit-animation-delay: var(--fa-animation-delay, 0);
  animation-delay: var(--fa-animation-delay, 0);
  -webkit-animation-direction: var(--fa-animation-direction, normal);
  animation-direction: var(--fa-animation-direction, normal);
  -webkit-animation-duration: var(--fa-animation-duration, 1s);
  animation-duration: var(--fa-animation-duration, 1s);
  -webkit-animation-iteration-count: var(
    --fa-animation-iteration-count,
    infinite
  );
  animation-iteration-count: var(--fa-animation-iteration-count, infinite);
  -webkit-animation-timing-function: var(--fa-animation-timing, ease-in-out);
  animation-timing-function: var(--fa-animation-timing, ease-in-out);
}
.fa-bounce {
  -webkit-animation-name: fa-bounce;
  animation-name: fa-bounce;
  -webkit-animation-delay: var(--fa-animation-delay, 0);
  animation-delay: var(--fa-animation-delay, 0);
  -webkit-animation-direction: var(--fa-animation-direction, normal);
  animation-direction: var(--fa-animation-direction, normal);
  -webkit-animation-duration: var(--fa-animation-duration, 1s);
  animation-duration: var(--fa-animation-duration, 1s);
  -webkit-animation-iteration-count: var(
    --fa-animation-iteration-count,
    infinite
  );
  animation-iteration-count: var(--fa-animation-iteration-count, infinite);
  -webkit-animation-timing-function: var(
    --fa-animation-timing,
    cubic-bezier(0.28, 0.84, 0.42, 1)
  );
  animation-timing-function: var(
    --fa-animation-timing,
    cubic-bezier(0.28, 0.84, 0.42, 1)
  );
}
.fa-fade {
  -webkit-animation-name: fa-fade;
  animation-name: fa-fade;
  -webkit-animation-iteration-count: var(
    --fa-animation-iteration-count,
    infinite
  );
  animation-iteration-count: var(--fa-animation-iteration-count, infinite);
  -webkit-animation-timing-function: var(
    --fa-animation-timing,
    cubic-bezier(0.4, 0, 0.6, 1)
  );
  animation-timing-function: var(
    --fa-animation-timing,
    cubic-bezier(0.4, 0, 0.6, 1)
  );
}
.fa-beat-fade,
.fa-fade {
  -webkit-animation-delay: var(--fa-animation-delay, 0);
  animation-delay: var(--fa-animation-delay, 0);
  -webkit-animation-direction: var(--fa-animation-direction, normal);
  animation-direction: var(--fa-animation-direction, normal);
  -webkit-animation-duration: var(--fa-animation-duration, 1s);
  animation-duration: var(--fa-animation-duration, 1s);
}
.fa-beat-fade {
  -webkit-animation-name: fa-beat-fade;
  animation-name: fa-beat-fade;
  -webkit-animation-iteration-count: var(
    --fa-animation-iteration-count,
    infinite
  );
  animation-iteration-count: var(--fa-animation-iteration-count, infinite);
  -webkit-animation-timing-function: var(
    --fa-animation-timing,
    cubic-bezier(0.4, 0, 0.6, 1)
  );
  animation-timing-function: var(
    --fa-animation-timing,
    cubic-bezier(0.4, 0, 0.6, 1)
  );
}
.fa-flip {
  -webkit-animation-name: fa-flip;
  animation-name: fa-flip;
  -webkit-animation-delay: var(--fa-animation-delay, 0);
  animation-delay: var(--fa-animation-delay, 0);
  -webkit-animation-direction: var(--fa-animation-direction, normal);
  animation-direction: var(--fa-animation-direction, normal);
  -webkit-animation-duration: var(--fa-animation-duration, 1s);
  animation-duration: var(--fa-animation-duration, 1s);
  -webkit-animation-iteration-count: var(
    --fa-animation-iteration-count,
    infinite
  );
  animation-iteration-count: var(--fa-animation-iteration-count, infinite);
  -webkit-animation-timing-function: var(--fa-animation-timing, ease-in-out);
  animation-timing-function: var(--fa-animation-timing, ease-in-out);
}
.fa-shake {
  -webkit-animation-name: fa-shake;
  animation-name: fa-shake;
  -webkit-animation-duration: var(--fa-animation-duration, 1s);
  animation-duration: var(--fa-animation-duration, 1s);
  -webkit-animation-iteration-count: var(
    --fa-animation-iteration-count,
    infinite
  );
  animation-iteration-count: var(--fa-animation-iteration-count, infinite);
  -webkit-animation-timing-function: var(--fa-animation-timing, linear);
  animation-timing-function: var(--fa-animation-timing, linear);
}
.fa-shake,
.fa-spin {
  -webkit-animation-delay: var(--fa-animation-delay, 0);
  animation-delay: var(--fa-animation-delay, 0);
  -webkit-animation-direction: var(--fa-animation-direction, normal);
  animation-direction: var(--fa-animation-direction, normal);
}
.fa-spin {
  -webkit-animation-name: fa-spin;
  animation-name: fa-spin;
  -webkit-animation-duration: var(--fa-animation-duration, 2s);
  animation-duration: var(--fa-animation-duration, 2s);
  -webkit-animation-iteration-count: var(
    --fa-animation-iteration-count,
    infinite
  );
  animation-iteration-count: var(--fa-animation-iteration-count, infinite);
  -webkit-animation-timing-function: var(--fa-animation-timing, linear);
  animation-timing-function: var(--fa-animation-timing, linear);
}
.fa-spin-reverse {
  --fa-animation-direction: reverse;
}
.fa-pulse,
.fa-spin-pulse {
  -webkit-animation-name: fa-spin;
  animation-name: fa-spin;
  -webkit-animation-direction: var(--fa-animation-direction, normal);
  animation-direction: var(--fa-animation-direction, normal);
  -webkit-animation-duration: var(--fa-animation-duration, 1s);
  animation-duration: var(--fa-animation-duration, 1s);
  -webkit-animation-iteration-count: var(
    --fa-animation-iteration-count,
    infinite
  );
  animation-iteration-count: var(--fa-animation-iteration-count, infinite);
  -webkit-animation-timing-function: var(--fa-animation-timing, steps(8));
  animation-timing-function: var(--fa-animation-timing, steps(8));
}
@media (prefers-reduced-motion: reduce) {
  .fa-beat,
  .fa-beat-fade,
  .fa-bounce,
  .fa-fade,
  .fa-flip,
  .fa-pulse,
  .fa-shake,
  .fa-spin,
  .fa-spin-pulse {
    -webkit-animation-delay: -1ms;
    animation-delay: -1ms;
    -webkit-animation-duration: 1ms;
    animation-duration: 1ms;
    -webkit-animation-iteration-count: 1;
    animation-iteration-count: 1;
    transition-delay: 0s;
    transition-duration: 0s;
  }
}
@-webkit-keyframes fa-beat {
  0%,
  90% {
    -webkit-transform: scale(1);
    transform: scale(1);
  }
  45% {
    -webkit-transform: scale(var(--fa-beat-scale, 1.25));
    transform: scale(var(--fa-beat-scale, 1.25));
  }
}
@keyframes fa-beat {
  0%,
  90% {
    -webkit-transform: scale(1);
    transform: scale(1);
  }
  45% {
    -webkit-transform: scale(var(--fa-beat-scale, 1.25));
    transform: scale(var(--fa-beat-scale, 1.25));
  }
}
@-webkit-keyframes fa-bounce {
  0% {
    -webkit-transform: scale(1) translateY(0);
    transform: scale(1) translateY(0);
  }
  10% {
    -webkit-transform: scale(
        var(--fa-bounce-start-scale-x, 1.1),
        var(--fa-bounce-start-scale-y, 0.9)
      )
      translateY(0);
    transform: scale(
        var(--fa-bounce-start-scale-x, 1.1),
        var(--fa-bounce-start-scale-y, 0.9)
      )
      translateY(0);
  }
  30% {
    -webkit-transform: scale(
        var(--fa-bounce-jump-scale-x, 0.9),
        var(--fa-bounce-jump-scale-y, 1.1)
      )
      translateY(var(--fa-bounce-height, -0.5em));
    transform: scale(
        var(--fa-bounce-jump-scale-x, 0.9),
        var(--fa-bounce-jump-scale-y, 1.1)
      )
      translateY(var(--fa-bounce-height, -0.5em));
  }
  50% {
    -webkit-transform: scale(
        var(--fa-bounce-land-scale-x, 1.05),
        var(--fa-bounce-land-scale-y, 0.95)
      )
      translateY(0);
    transform: scale(
        var(--fa-bounce-land-scale-x, 1.05),
        var(--fa-bounce-land-scale-y, 0.95)
      )
      translateY(0);
  }
  57% {
    -webkit-transform: scale(1) translateY(var(--fa-bounce-rebound, -0.125em));
    transform: scale(1) translateY(var(--fa-bounce-rebound, -0.125em));
  }
  64% {
    -webkit-transform: scale(1) translateY(0);
    transform: scale(1) translateY(0);
  }
  to {
    -webkit-transform: scale(1) translateY(0);
    transform: scale(1) translateY(0);
  }
}
@keyframes fa-bounce {
  0% {
    -webkit-transform: scale(1) translateY(0);
    transform: scale(1) translateY(0);
  }
  10% {
    -webkit-transform: scale(
        var(--fa-bounce-start-scale-x, 1.1),
        var(--fa-bounce-start-scale-y, 0.9)
      )
      translateY(0);
    transform: scale(
        var(--fa-bounce-start-scale-x, 1.1),
        var(--fa-bounce-start-scale-y, 0.9)
      )
      translateY(0);
  }
  30% {
    -webkit-transform: scale(
        var(--fa-bounce-jump-scale-x, 0.9),
        var(--fa-bounce-jump-scale-y, 1.1)
      )
      translateY(var(--fa-bounce-height, -0.5em));
    transform: scale(
        var(--fa-bounce-jump-scale-x, 0.9),
        var(--fa-bounce-jump-scale-y, 1.1)
      )
      translateY(var(--fa-bounce-height, -0.5em));
  }
  50% {
    -webkit-transform: scale(
        var(--fa-bounce-land-scale-x, 1.05),
        var(--fa-bounce-land-scale-y, 0.95)
      )
      translateY(0);
    transform: scale(
        var(--fa-bounce-land-scale-x, 1.05),
        var(--fa-bounce-land-scale-y, 0.95)
      )
      translateY(0);
  }
  57% {
    -webkit-transform: scale(1) translateY(var(--fa-bounce-rebound, -0.125em));
    transform: scale(1) translateY(var(--fa-bounce-rebound, -0.125em));
  }
  64% {
    -webkit-transform: scale(1) translateY(0);
    transform: scale(1) translateY(0);
  }
  to {
    -webkit-transform: scale(1) translateY(0);
    transform: scale(1) translateY(0);
  }
}
@-webkit-keyframes fa-fade {
  50% {
    opacity: var(--fa-fade-opacity, 0.4);
  }
}
@keyframes fa-fade {
  50% {
    opacity: var(--fa-fade-opacity, 0.4);
  }
}
@-webkit-keyframes fa-beat-fade {
  0%,
  to {
    opacity: var(--fa-beat-fade-opacity, 0.4);
    -webkit-transform: scale(1);
    transform: scale(1);
  }
  50% {
    opacity: 1;
    -webkit-transform: scale(var(--fa-beat-fade-scale, 1.125));
    transform: scale(var(--fa-beat-fade-scale, 1.125));
  }
}
@keyframes fa-beat-fade {
  0%,
  to {
    opacity: var(--fa-beat-fade-opacity, 0.4);
    -webkit-transform: scale(1);
    transform: scale(1);
  }
  50% {
    opacity: 1;
    -webkit-transform: scale(var(--fa-beat-fade-scale, 1.125));
    transform: scale(var(--fa-beat-fade-scale, 1.125));
  }
}
@-webkit-keyframes fa-flip {
  50% {
    -webkit-transform: rotate3d(
      var(--fa-flip-x, 0),
      var(--fa-flip-y, 1),
      var(--fa-flip-z, 0),
      var(--fa-flip-angle, -180deg)
    );
    transform: rotate3d(
      var(--fa-flip-x, 0),
      var(--fa-flip-y, 1),
      var(--fa-flip-z, 0),
      var(--fa-flip-angle, -180deg)
    );
  }
}
@keyframes fa-flip {
  50% {
    -webkit-transform: rotate3d(
      var(--fa-flip-x, 0),
      var(--fa-flip-y, 1),
      var(--fa-flip-z, 0),
      var(--fa-flip-angle, -180deg)
    );
    transform: rotate3d(
      var(--fa-flip-x, 0),
      var(--fa-flip-y, 1),
      var(--fa-flip-z, 0),
      var(--fa-flip-angle, -180deg)
    );
  }
}
@-webkit-keyframes fa-shake {
  0% {
    -webkit-transform: rotate(-15deg);
    transform: rotate(-15deg);
  }
  4% {
    -webkit-transform: rotate(15deg);
    transform: rotate(15deg);
  }
  8%,
  24% {
    -webkit-transform: rotate(-18deg);
    transform: rotate(-18deg);
  }
  12%,
  28% {
    -webkit-transform: rotate(18deg);
    transform: rotate(18deg);
  }
  16% {
    -webkit-transform: rotate(-22deg);
    transform: rotate(-22deg);
  }
  20% {
    -webkit-transform: rotate(22deg);
    transform: rotate(22deg);
  }
  32% {
    -webkit-transform: rotate(-12deg);
    transform: rotate(-12deg);
  }
  36% {
    -webkit-transform: rotate(12deg);
    transform: rotate(12deg);
  }
  40%,
  to {
    -webkit-transform: rotate(0deg);
    transform: rotate(0deg);
  }
}
@keyframes fa-shake {
  0% {
    -webkit-transform: rotate(-15deg);
    transform: rotate(-15deg);
  }
  4% {
    -webkit-transform: rotate(15deg);
    transform: rotate(15deg);
  }
  8%,
  24% {
    -webkit-transform: rotate(-18deg);
    transform: rotate(-18deg);
  }
  12%,
  28% {
    -webkit-transform: rotate(18deg);
    transform: rotate(18deg);
  }
  16% {
    -webkit-transform: rotate(-22deg);
    transform: rotate(-22deg);
  }
  20% {
    -webkit-transform: rotate(22deg);
    transform: rotate(22deg);
  }
  32% {
    -webkit-transform: rotate(-12deg);
    transform: rotate(-12deg);
  }
  36% {
    -webkit-transform: rotate(12deg);
    transform: rotate(12deg);
  }
  40%,
  to {
    -webkit-transform: rotate(0deg);
    transform: rotate(0deg);
  }
}
@-webkit-keyframes fa-spin {
  0% {
    -webkit-transform: rotate(0deg);
    transform: rotate(0deg);
  }
  to {
    -webkit-transform: rotate(1turn);
    transform: rotate(1turn);
  }
}
@keyframes fa-spin {
  0% {
    -webkit-transform: rotate(0deg);
    transform: rotate(0deg);
  }
  to {
    -webkit-transform: rotate(1turn);
    transform: rotate(1turn);
  }
}
.fa-rotate-90 {
  -webkit-transform: rotate(90deg);
  transform: rotate(90deg);
}
.fa-rotate-180 {
  -webkit-transform: rotate(180deg);
  transform: rotate(180deg);
}
.fa-rotate-270 {
  -webkit-transform: rotate(270deg);
  transform: rotate(270deg);
}
.fa-flip-horizontal {
  -webkit-transform: scaleX(-1);
  transform: scaleX(-1);
}
.fa-flip-vertical {
  -webkit-transform: scaleY(-1);
  transform: scaleY(-1);
}
.fa-flip-both,
.fa-flip-horizontal.fa-flip-vertical {
  -webkit-transform: scale(-1);
  transform: scale(-1);
}
.fa-rotate-by {
  -webkit-transform: rotate(var(--fa-rotate-angle, none));
  transform: rotate(var(--fa-rotate-angle, none));
}
.fa-stack {
  display: inline-block;
  height: 2em;
  line-height: 2em;
  position: relative;
  vertical-align: middle;
  width: 2.5em;
}
.fa-stack-1x,
.fa-stack-2x {
  left: 0;
  position: absolute;
  text-align: center;
  width: 100%;
  z-index: var(--fa-stack-z-index, auto);
}
.fa-stack-1x {
  line-height: inherit;
}
.fa-stack-2x {
  font-size: 2em;
}
.fa-inverse {
  color: var(--fa-inverse, #fff);
}
.fa-0:before {
  content: "\30";
}
.fa-1:before {
  content: "\31";
}
.fa-2:before {
  content: "\32";
}
.fa-3:before {
  content: "\33";
}
.fa-4:before {
  content: "\34";
}
.fa-5:before {
  content: "\35";
}
.fa-6:before {
  content: "\36";
}
.fa-7:before {
  content: "\37";
}
.fa-8:before {
  content: "\38";
}
.fa-9:before {
  content: "\39";
}
.fa-a:before {
  content: "\41";
}
.fa-address-book:before,
.fa-contact-book:before {
  content: "\f2b9";
}
.fa-address-card:before,
.fa-contact-card:before,
.fa-vcard:before {
  content: "\f2bb";
}
.fa-align-center:before {
  content: "\f037";
}
.fa-align-justify:before {
  content: "\f039";
}
.fa-align-left:before {
  content: "\f036";
}
.fa-align-right:before {
  content: "\f038";
}
.fa-anchor:before {
  content: "\f13d";
}
.fa-anchor-circle-check:before {
  content: "\e4aa";
}
.fa-anchor-circle-exclamation:before {
  content: "\e4ab";
}
.fa-anchor-circle-xmark:before {
  content: "\e4ac";
}
.fa-anchor-lock:before {
  content: "\e4ad";
}
.fa-angle-down:before {
  content: "\f107";
}
.fa-angle-left:before {
  content: "\f104";
}
.fa-angle-right:before {
  content: "\f105";
}
.fa-angle-up:before {
  content: "\f106";
}
.fa-angle-double-down:before,
.fa-angles-down:before {
  content: "\f103";
}
.fa-angle-double-left:before,
.fa-angles-left:before {
  content: "\f100";
}
.fa-angle-double-right:before,
.fa-angles-right:before {
  content: "\f101";
}
.fa-angle-double-up:before,
.fa-angles-up:before {
  content: "\f102";
}
.fa-ankh:before {
  content: "\f644";
}
.fa-apple-alt:before,
.fa-apple-whole:before {
  content: "\f5d1";
}
.fa-archway:before {
  content: "\f557";
}
.fa-arrow-down:before {
  content: "\f063";
}
.fa-arrow-down-1-9:before,
.fa-sort-numeric-asc:before,
.fa-sort-numeric-down:before {
  content: "\f162";
}
.fa-arrow-down-9-1:before,
.fa-sort-numeric-desc:before,
.fa-sort-numeric-down-alt:before {
  content: "\f886";
}
.fa-arrow-down-a-z:before,
.fa-sort-alpha-asc:before,
.fa-sort-alpha-down:before {
  content: "\f15d";
}
.fa-arrow-down-long:before,
.fa-long-arrow-down:before {
  content: "\f175";
}
.fa-arrow-down-short-wide:before,
.fa-sort-amount-desc:before,
.fa-sort-amount-down-alt:before {
  content: "\f884";
}
.fa-arrow-down-up-across-line:before {
  content: "\e4af";
}
.fa-arrow-down-up-lock:before {
  content: "\e4b0";
}
.fa-arrow-down-wide-short:before,
.fa-sort-amount-asc:before,
.fa-sort-amount-down:before {
  content: "\f160";
}
.fa-arrow-down-z-a:before,
.fa-sort-alpha-desc:before,
.fa-sort-alpha-down-alt:before {
  content: "\f881";
}
.fa-arrow-left:before {
  content: "\f060";
}
.fa-arrow-left-long:before,
.fa-long-arrow-left:before {
  content: "\f177";
}
.fa-arrow-pointer:before,
.fa-mouse-pointer:before {
  content: "\f245";
}
.fa-arrow-right:before {
  content: "\f061";
}
.fa-arrow-right-arrow-left:before,
.fa-exchange:before {
  content: "\f0ec";
}
.fa-arrow-right-from-bracket:before,
.fa-sign-out:before {
  content: "\f08b";
}
.fa-arrow-right-long:before,
.fa-long-arrow-right:before {
  content: "\f178";
}
.fa-arrow-right-to-bracket:before,
.fa-sign-in:before {
  content: "\f090";
}
.fa-arrow-right-to-city:before {
  content: "\e4b3";
}
.fa-arrow-left-rotate:before,
.fa-arrow-rotate-back:before,
.fa-arrow-rotate-backward:before,
.fa-arrow-rotate-left:before,
.fa-undo:before {
  content: "\f0e2";
}
.fa-arrow-right-rotate:before,
.fa-arrow-rotate-forward:before,
.fa-arrow-rotate-right:before,
.fa-redo:before {
  content: "\f01e";
}
.fa-arrow-trend-down:before {
  content: "\e097";
}
.fa-arrow-trend-up:before {
  content: "\e098";
}
.fa-arrow-turn-down:before,
.fa-level-down:before {
  content: "\f149";
}
.fa-arrow-turn-up:before,
.fa-level-up:before {
  content: "\f148";
}
.fa-arrow-up:before {
  content: "\f062";
}
.fa-arrow-up-1-9:before,
.fa-sort-numeric-up:before {
  content: "\f163";
}
.fa-arrow-up-9-1:before,
.fa-sort-numeric-up-alt:before {
  content: "\f887";
}
.fa-arrow-up-a-z:before,
.fa-sort-alpha-up:before {
  content: "\f15e";
}
.fa-arrow-up-from-bracket:before {
  content: "\e09a";
}
.fa-arrow-up-from-ground-water:before {
  content: "\e4b5";
}
.fa-arrow-up-from-water-pump:before {
  content: "\e4b6";
}
.fa-arrow-up-long:before,
.fa-long-arrow-up:before {
  content: "\f176";
}
.fa-arrow-up-right-dots:before {
  content: "\e4b7";
}
.fa-arrow-up-right-from-square:before,
.fa-external-link:before {
  content: "\f08e";
}
.fa-arrow-up-short-wide:before,
.fa-sort-amount-up-alt:before {
  content: "\f885";
}
.fa-arrow-up-wide-short:before,
.fa-sort-amount-up:before {
  content: "\f161";
}
.fa-arrow-up-z-a:before,
.fa-sort-alpha-up-alt:before {
  content: "\f882";
}
.fa-arrows-down-to-line:before {
  content: "\e4b8";
}
.fa-arrows-down-to-people:before {
  content: "\e4b9";
}
.fa-arrows-h:before,
.fa-arrows-left-right:before {
  content: "\f07e";
}
.fa-arrows-left-right-to-line:before {
  content: "\e4ba";
}
.fa-arrows-rotate:before,
.fa-refresh:before,
.fa-sync:before {
  content: "\f021";
}
.fa-arrows-spin:before {
  content: "\e4bb";
}
.fa-arrows-split-up-and-left:before {
  content: "\e4bc";
}
.fa-arrows-to-circle:before {
  content: "\e4bd";
}
.fa-arrows-to-dot:before {
  content: "\e4be";
}
.fa-arrows-to-eye:before {
  content: "\e4bf";
}
.fa-arrows-turn-right:before {
  content: "\e4c0";
}
.fa-arrows-turn-to-dots:before {
  content: "\e4c1";
}
.fa-arrows-up-down:before,
.fa-arrows-v:before {
  content: "\f07d";
}
.fa-arrows-up-down-left-right:before,
.fa-arrows:before {
  content: "\f047";
}
.fa-arrows-up-to-line:before {
  content: "\e4c2";
}
.fa-asterisk:before {
  content: "\2a";
}
.fa-at:before {
  content: "\40";
}
.fa-atom:before {
  content: "\f5d2";
}
.fa-audio-description:before {
  content: "\f29e";
}
.fa-austral-sign:before {
  content: "\e0a9";
}
.fa-award:before {
  content: "\f559";
}
.fa-b:before {
  content: "\42";
}
.fa-baby:before {
  content: "\f77c";
}
.fa-baby-carriage:before,
.fa-carriage-baby:before {
  content: "\f77d";
}
.fa-backward:before {
  content: "\f04a";
}
.fa-backward-fast:before,
.fa-fast-backward:before {
  content: "\f049";
}
.fa-backward-step:before,
.fa-step-backward:before {
  content: "\f048";
}
.fa-bacon:before {
  content: "\f7e5";
}
.fa-bacteria:before {
  content: "\e059";
}
.fa-bacterium:before {
  content: "\e05a";
}
.fa-bag-shopping:before,
.fa-shopping-bag:before {
  content: "\f290";
}
.fa-bahai:before {
  content: "\f666";
}
.fa-baht-sign:before {
  content: "\e0ac";
}
.fa-ban:before,
.fa-cancel:before {
  content: "\f05e";
}
.fa-ban-smoking:before,
.fa-smoking-ban:before {
  content: "\f54d";
}
.fa-band-aid:before,
.fa-bandage:before {
  content: "\f462";
}
.fa-barcode:before {
  content: "\f02a";
}
.fa-bars:before,
.fa-navicon:before {
  content: "\f0c9";
}
.fa-bars-progress:before,
.fa-tasks-alt:before {
  content: "\f828";
}
.fa-bars-staggered:before,
.fa-reorder:before,
.fa-stream:before {
  content: "\f550";
}
.fa-baseball-ball:before,
.fa-baseball:before {
  content: "\f433";
}
.fa-baseball-bat-ball:before {
  content: "\f432";
}
.fa-basket-shopping:before,
.fa-shopping-basket:before {
  content: "\f291";
}
.fa-basketball-ball:before,
.fa-basketball:before {
  content: "\f434";
}
.fa-bath:before,
.fa-bathtub:before {
  content: "\f2cd";
}
.fa-battery-0:before,
.fa-battery-empty:before {
  content: "\f244";
}
.fa-battery-5:before,
.fa-battery-full:before,
.fa-battery:before {
  content: "\f240";
}
.fa-battery-3:before,
.fa-battery-half:before {
  content: "\f242";
}
.fa-battery-2:before,
.fa-battery-quarter:before {
  content: "\f243";
}
.fa-battery-4:before,
.fa-battery-three-quarters:before {
  content: "\f241";
}
.fa-bed:before {
  content: "\f236";
}
.fa-bed-pulse:before,
.fa-procedures:before {
  content: "\f487";
}
.fa-beer-mug-empty:before,
.fa-beer:before {
  content: "\f0fc";
}
.fa-bell:before {
  content: "\f0f3";
}
.fa-bell-concierge:before,
.fa-concierge-bell:before {
  content: "\f562";
}
.fa-bell-slash:before {
  content: "\f1f6";
}
.fa-bezier-curve:before {
  content: "\f55b";
}
.fa-bicycle:before {
  content: "\f206";
}
.fa-binoculars:before {
  content: "\f1e5";
}
.fa-biohazard:before {
  content: "\f780";
}
.fa-bitcoin-sign:before {
  content: "\e0b4";
}
.fa-blender:before {
  content: "\f517";
}
.fa-blender-phone:before {
  content: "\f6b6";
}
.fa-blog:before {
  content: "\f781";
}
.fa-bold:before {
  content: "\f032";
}
.fa-bolt:before,
.fa-zap:before {
  content: "\f0e7";
}
.fa-bolt-lightning:before {
  content: "\e0b7";
}
.fa-bomb:before {
  content: "\f1e2";
}
.fa-bone:before {
  content: "\f5d7";
}
.fa-bong:before {
  content: "\f55c";
}
.fa-book:before {
  content: "\f02d";
}
.fa-atlas:before,
.fa-book-atlas:before {
  content: "\f558";
}
.fa-bible:before,
.fa-book-bible:before {
  content: "\f647";
}
.fa-book-bookmark:before {
  content: "\e0bb";
}
.fa-book-journal-whills:before,
.fa-journal-whills:before {
  content: "\f66a";
}
.fa-book-medical:before {
  content: "\f7e6";
}
.fa-book-open:before {
  content: "\f518";
}
.fa-book-open-reader:before,
.fa-book-reader:before {
  content: "\f5da";
}
.fa-book-quran:before,
.fa-quran:before {
  content: "\f687";
}
.fa-book-dead:before,
.fa-book-skull:before {
  content: "\f6b7";
}
.fa-bookmark:before {
  content: "\f02e";
}
.fa-border-all:before {
  content: "\f84c";
}
.fa-border-none:before {
  content: "\f850";
}
.fa-border-style:before,
.fa-border-top-left:before {
  content: "\f853";
}
.fa-bore-hole:before {
  content: "\e4c3";
}
.fa-bottle-droplet:before {
  content: "\e4c4";
}
.fa-bottle-water:before {
  content: "\e4c5";
}
.fa-bowl-food:before {
  content: "\e4c6";
}
.fa-bowl-rice:before {
  content: "\e2eb";
}
.fa-bowling-ball:before {
  content: "\f436";
}
.fa-box:before {
  content: "\f466";
}
.fa-archive:before,
.fa-box-archive:before {
  content: "\f187";
}
.fa-box-open:before {
  content: "\f49e";
}
.fa-box-tissue:before {
  content: "\e05b";
}
.fa-boxes-packing:before {
  content: "\e4c7";
}
.fa-boxes-alt:before,
.fa-boxes-stacked:before,
.fa-boxes:before {
  content: "\f468";
}
.fa-braille:before {
  content: "\f2a1";
}
.fa-brain:before {
  content: "\f5dc";
}
.fa-brazilian-real-sign:before {
  content: "\e46c";
}
.fa-bread-slice:before {
  content: "\f7ec";
}
.fa-bridge:before {
  content: "\e4c8";
}
.fa-bridge-circle-check:before {
  content: "\e4c9";
}
.fa-bridge-circle-exclamation:before {
  content: "\e4ca";
}
.fa-bridge-circle-xmark:before {
  content: "\e4cb";
}
.fa-bridge-lock:before {
  content: "\e4cc";
}
.fa-bridge-water:before {
  content: "\e4ce";
}
.fa-briefcase:before {
  content: "\f0b1";
}
.fa-briefcase-medical:before {
  content: "\f469";
}
.fa-broom:before {
  content: "\f51a";
}
.fa-broom-ball:before,
.fa-quidditch-broom-ball:before,
.fa-quidditch:before {
  content: "\f458";
}
.fa-brush:before {
  content: "\f55d";
}
.fa-bucket:before {
  content: "\e4cf";
}
.fa-bug:before {
  content: "\f188";
}
.fa-bug-slash:before {
  content: "\e490";
}
.fa-bugs:before {
  content: "\e4d0";
}
.fa-building:before {
  content: "\f1ad";
}
.fa-building-circle-arrow-right:before {
  content: "\e4d1";
}
.fa-building-circle-check:before {
  content: "\e4d2";
}
.fa-building-circle-exclamation:before {
  content: "\e4d3";
}
.fa-building-circle-xmark:before {
  content: "\e4d4";
}
.fa-bank:before,
.fa-building-columns:before,
.fa-institution:before,
.fa-museum:before,
.fa-university:before {
  content: "\f19c";
}
.fa-building-flag:before {
  content: "\e4d5";
}
.fa-building-lock:before {
  content: "\e4d6";
}
.fa-building-ngo:before {
  content: "\e4d7";
}
.fa-building-shield:before {
  content: "\e4d8";
}
.fa-building-un:before {
  content: "\e4d9";
}
.fa-building-user:before {
  content: "\e4da";
}
.fa-building-wheat:before {
  content: "\e4db";
}
.fa-bullhorn:before {
  content: "\f0a1";
}
.fa-bullseye:before {
  content: "\f140";
}
.fa-burger:before,
.fa-hamburger:before {
  content: "\f805";
}
.fa-burst:before {
  content: "\e4dc";
}
.fa-bus:before {
  content: "\f207";
}
.fa-bus-alt:before,
.fa-bus-simple:before {
  content: "\f55e";
}
.fa-briefcase-clock:before,
.fa-business-time:before {
  content: "\f64a";
}
.fa-c:before {
  content: "\43";
}
.fa-birthday-cake:before,
.fa-cake-candles:before,
.fa-cake:before {
  content: "\f1fd";
}
.fa-calculator:before {
  content: "\f1ec";
}
.fa-calendar:before {
  content: "\f133";
}
.fa-calendar-check:before {
  content: "\f274";
}
.fa-calendar-day:before {
  content: "\f783";
}
.fa-calendar-alt:before,
.fa-calendar-days:before {
  content: "\f073";
}
.fa-calendar-minus:before {
  content: "\f272";
}
.fa-calendar-plus:before {
  content: "\f271";
}
.fa-calendar-week:before {
  content: "\f784";
}
.fa-calendar-times:before,
.fa-calendar-xmark:before {
  content: "\f273";
}
.fa-camera-alt:before,
.fa-camera:before {
  content: "\f030";
}
.fa-camera-retro:before {
  content: "\f083";
}
.fa-camera-rotate:before {
  content: "\e0d8";
}
.fa-campground:before {
  content: "\f6bb";
}
.fa-candy-cane:before {
  content: "\f786";
}
.fa-cannabis:before {
  content: "\f55f";
}
.fa-capsules:before {
  content: "\f46b";
}
.fa-automobile:before,
.fa-car:before {
  content: "\f1b9";
}
.fa-battery-car:before,
.fa-car-battery:before {
  content: "\f5df";
}
.fa-car-burst:before,
.fa-car-crash:before {
  content: "\f5e1";
}
.fa-car-on:before {
  content: "\e4dd";
}
.fa-car-alt:before,
.fa-car-rear:before {
  content: "\f5de";
}
.fa-car-side:before {
  content: "\f5e4";
}
.fa-car-tunnel:before {
  content: "\e4de";
}
.fa-caravan:before {
  content: "\f8ff";
}
.fa-caret-down:before {
  content: "\f0d7";
}
.fa-caret-left:before {
  content: "\f0d9";
}
.fa-caret-right:before {
  content: "\f0da";
}
.fa-caret-up:before {
  content: "\f0d8";
}
.fa-carrot:before {
  content: "\f787";
}
.fa-cart-arrow-down:before {
  content: "\f218";
}
.fa-cart-flatbed:before,
.fa-dolly-flatbed:before {
  content: "\f474";
}
.fa-cart-flatbed-suitcase:before,
.fa-luggage-cart:before {
  content: "\f59d";
}
.fa-cart-plus:before {
  content: "\f217";
}
.fa-cart-shopping:before,
.fa-shopping-cart:before {
  content: "\f07a";
}
.fa-cash-register:before {
  content: "\f788";
}
.fa-cat:before {
  content: "\f6be";
}
.fa-cedi-sign:before {
  content: "\e0df";
}
.fa-cent-sign:before {
  content: "\e3f5";
}
.fa-certificate:before {
  content: "\f0a3";
}
.fa-chair:before {
  content: "\f6c0";
}
.fa-blackboard:before,
.fa-chalkboard:before {
  content: "\f51b";
}
.fa-chalkboard-teacher:before,
.fa-chalkboard-user:before {
  content: "\f51c";
}
.fa-champagne-glasses:before,
.fa-glass-cheers:before {
  content: "\f79f";
}
.fa-charging-station:before {
  content: "\f5e7";
}
.fa-area-chart:before,
.fa-chart-area:before {
  content: "\f1fe";
}
.fa-bar-chart:before,
.fa-chart-bar:before {
  content: "\f080";
}
.fa-chart-column:before {
  content: "\e0e3";
}
.fa-chart-gantt:before {
  content: "\e0e4";
}
.fa-chart-line:before,
.fa-line-chart:before {
  content: "\f201";
}
.fa-chart-pie:before,
.fa-pie-chart:before {
  content: "\f200";
}
.fa-chart-simple:before {
  content: "\e473";
}
.fa-check:before {
  content: "\f00c";
}
.fa-check-double:before {
  content: "\f560";
}
.fa-check-to-slot:before,
.fa-vote-yea:before {
  content: "\f772";
}
.fa-cheese:before {
  content: "\f7ef";
}
.fa-chess:before {
  content: "\f439";
}
.fa-chess-bishop:before {
  content: "\f43a";
}
.fa-chess-board:before {
  content: "\f43c";
}
.fa-chess-king:before {
  content: "\f43f";
}
.fa-chess-knight:before {
  content: "\f441";
}
.fa-chess-pawn:before {
  content: "\f443";
}
.fa-chess-queen:before {
  content: "\f445";
}
.fa-chess-rook:before {
  content: "\f447";
}
.fa-chevron-down:before {
  content: "\f078";
}
.fa-chevron-left:before {
  content: "\f053";
}
.fa-chevron-right:before {
  content: "\f054";
}
.fa-chevron-up:before {
  content: "\f077";
}
.fa-child:before {
  content: "\f1ae";
}
.fa-child-dress:before {
  content: "\e59c";
}
.fa-child-reaching:before {
  content: "\e59d";
}
.fa-child-rifle:before {
  content: "\e4e0";
}
.fa-children:before {
  content: "\e4e1";
}
.fa-church:before {
  content: "\f51d";
}
.fa-circle:before {
  content: "\f111";
}
.fa-arrow-circle-down:before,
.fa-circle-arrow-down:before {
  content: "\f0ab";
}
.fa-arrow-circle-left:before,
.fa-circle-arrow-left:before {
  content: "\f0a8";
}
.fa-arrow-circle-right:before,
.fa-circle-arrow-right:before {
  content: "\f0a9";
}
.fa-arrow-circle-up:before,
.fa-circle-arrow-up:before {
  content: "\f0aa";
}
.fa-check-circle:before,
.fa-circle-check:before {
  content: "\f058";
}
.fa-chevron-circle-down:before,
.fa-circle-chevron-down:before {
  content: "\f13a";
}
.fa-chevron-circle-left:before,
.fa-circle-chevron-left:before {
  content: "\f137";
}
.fa-chevron-circle-right:before,
.fa-circle-chevron-right:before {
  content: "\f138";
}
.fa-chevron-circle-up:before,
.fa-circle-chevron-up:before {
  content: "\f139";
}
.fa-circle-dollar-to-slot:before,
.fa-donate:before {
  content: "\f4b9";
}
.fa-circle-dot:before,
.fa-dot-circle:before {
  content: "\f192";
}
.fa-arrow-alt-circle-down:before,
.fa-circle-down:before {
  content: "\f358";
}
.fa-circle-exclamation:before,
.fa-exclamation-circle:before {
  content: "\f06a";
}
.fa-circle-h:before,
.fa-hospital-symbol:before {
  content: "\f47e";
}
.fa-adjust:before,
.fa-circle-half-stroke:before {
  content: "\f042";
}
.fa-circle-info:before,
.fa-info-circle:before {
  content: "\f05a";
}
.fa-arrow-alt-circle-left:before,
.fa-circle-left:before {
  content: "\f359";
}
.fa-circle-minus:before,
.fa-minus-circle:before {
  content: "\f056";
}
.fa-circle-nodes:before {
  content: "\e4e2";
}
.fa-circle-notch:before {
  content: "\f1ce";
}
.fa-circle-pause:before,
.fa-pause-circle:before {
  content: "\f28b";
}
.fa-circle-play:before,
.fa-play-circle:before {
  content: "\f144";
}
.fa-circle-plus:before,
.fa-plus-circle:before {
  content: "\f055";
}
.fa-circle-question:before,
.fa-question-circle:before {
  content: "\f059";
}
.fa-circle-radiation:before,
.fa-radiation-alt:before {
  content: "\f7ba";
}
.fa-arrow-alt-circle-right:before,
.fa-circle-right:before {
  content: "\f35a";
}
.fa-circle-stop:before,
.fa-stop-circle:before {
  content: "\f28d";
}
.fa-arrow-alt-circle-up:before,
.fa-circle-up:before {
  content: "\f35b";
}
.fa-circle-user:before,
.fa-user-circle:before {
  content: "\f2bd";
}
.fa-circle-xmark:before,
.fa-times-circle:before,
.fa-xmark-circle:before {
  content: "\f057";
}
.fa-city:before {
  content: "\f64f";
}
.fa-clapperboard:before {
  content: "\e131";
}
.fa-clipboard:before {
  content: "\f328";
}
.fa-clipboard-check:before {
  content: "\f46c";
}
.fa-clipboard-list:before {
  content: "\f46d";
}
.fa-clipboard-question:before {
  content: "\e4e3";
}
.fa-clipboard-user:before {
  content: "\f7f3";
}
.fa-clock-four:before,
.fa-clock:before {
  content: "\f017";
}
.fa-clock-rotate-left:before,
.fa-history:before {
  content: "\f1da";
}
.fa-clone:before {
  content: "\f24d";
}
.fa-closed-captioning:before {
  content: "\f20a";
}
.fa-cloud:before {
  content: "\f0c2";
}
.fa-cloud-arrow-down:before,
.fa-cloud-download-alt:before,
.fa-cloud-download:before {
  content: "\f0ed";
}
.fa-cloud-arrow-up:before,
.fa-cloud-upload-alt:before,
.fa-cloud-upload:before {
  content: "\f0ee";
}
.fa-cloud-bolt:before,
.fa-thunderstorm:before {
  content: "\f76c";
}
.fa-cloud-meatball:before {
  content: "\f73b";
}
.fa-cloud-moon:before {
  content: "\f6c3";
}
.fa-cloud-moon-rain:before {
  content: "\f73c";
}
.fa-cloud-rain:before {
  content: "\f73d";
}
.fa-cloud-showers-heavy:before {
  content: "\f740";
}
.fa-cloud-showers-water:before {
  content: "\e4e4";
}
.fa-cloud-sun:before {
  content: "\f6c4";
}
.fa-cloud-sun-rain:before {
  content: "\f743";
}
.fa-clover:before {
  content: "\e139";
}
.fa-code:before {
  content: "\f121";
}
.fa-code-branch:before {
  content: "\f126";
}
.fa-code-commit:before {
  content: "\f386";
}
.fa-code-compare:before {
  content: "\e13a";
}
.fa-code-fork:before {
  content: "\e13b";
}
.fa-code-merge:before {
  content: "\f387";
}
.fa-code-pull-request:before {
  content: "\e13c";
}
.fa-coins:before {
  content: "\f51e";
}
.fa-colon-sign:before {
  content: "\e140";
}
.fa-comment:before {
  content: "\f075";
}
.fa-comment-dollar:before {
  content: "\f651";
}
.fa-comment-dots:before,
.fa-commenting:before {
  content: "\f4ad";
}
.fa-comment-medical:before {
  content: "\f7f5";
}
.fa-comment-slash:before {
  content: "\f4b3";
}
.fa-comment-sms:before,
.fa-sms:before {
  content: "\f7cd";
}
.fa-comments:before {
  content: "\f086";
}
.fa-comments-dollar:before {
  content: "\f653";
}
.fa-compact-disc:before {
  content: "\f51f";
}
.fa-compass:before {
  content: "\f14e";
}
.fa-compass-drafting:before,
.fa-drafting-compass:before {
  content: "\f568";
}
.fa-compress:before {
  content: "\f066";
}
.fa-computer:before {
  content: "\e4e5";
}
.fa-computer-mouse:before,
.fa-mouse:before {
  content: "\f8cc";
}
.fa-cookie:before {
  content: "\f563";
}
.fa-cookie-bite:before {
  content: "\f564";
}
.fa-copy:before {
  content: "\f0c5";
}
.fa-copyright:before {
  content: "\f1f9";
}
.fa-couch:before {
  content: "\f4b8";
}
.fa-cow:before {
  content: "\f6c8";
}
.fa-credit-card-alt:before,
.fa-credit-card:before {
  content: "\f09d";
}
.fa-crop:before {
  content: "\f125";
}
.fa-crop-alt:before,
.fa-crop-simple:before {
  content: "\f565";
}
.fa-cross:before {
  content: "\f654";
}
.fa-crosshairs:before {
  content: "\f05b";
}
.fa-crow:before {
  content: "\f520";
}
.fa-crown:before {
  content: "\f521";
}
.fa-crutch:before {
  content: "\f7f7";
}
.fa-cruzeiro-sign:before {
  content: "\e152";
}
.fa-cube:before {
  content: "\f1b2";
}
.fa-cubes:before {
  content: "\f1b3";
}
.fa-cubes-stacked:before {
  content: "\e4e6";
}
.fa-d:before {
  content: "\44";
}
.fa-database:before {
  content: "\f1c0";
}
.fa-backspace:before,
.fa-delete-left:before {
  content: "\f55a";
}
.fa-democrat:before {
  content: "\f747";
}
.fa-desktop-alt:before,
.fa-desktop:before {
  content: "\f390";
}
.fa-dharmachakra:before {
  content: "\f655";
}
.fa-diagram-next:before {
  content: "\e476";
}
.fa-diagram-predecessor:before {
  content: "\e477";
}
.fa-diagram-project:before,
.fa-project-diagram:before {
  content: "\f542";
}
.fa-diagram-successor:before {
  content: "\e47a";
}
.fa-diamond:before {
  content: "\f219";
}
.fa-diamond-turn-right:before,
.fa-directions:before {
  content: "\f5eb";
}
.fa-dice:before {
  content: "\f522";
}
.fa-dice-d20:before {
  content: "\f6cf";
}
.fa-dice-d6:before {
  content: "\f6d1";
}
.fa-dice-five:before {
  content: "\f523";
}
.fa-dice-four:before {
  content: "\f524";
}
.fa-dice-one:before {
  content: "\f525";
}
.fa-dice-six:before {
  content: "\f526";
}
.fa-dice-three:before {
  content: "\f527";
}
.fa-dice-two:before {
  content: "\f528";
}
.fa-disease:before {
  content: "\f7fa";
}
.fa-display:before {
  content: "\e163";
}
.fa-divide:before {
  content: "\f529";
}
.fa-dna:before {
  content: "\f471";
}
.fa-dog:before {
  content: "\f6d3";
}
.fa-dollar-sign:before,
.fa-dollar:before,
.fa-usd:before {
  content: "\24";
}
.fa-dolly-box:before,
.fa-dolly:before {
  content: "\f472";
}
.fa-dong-sign:before {
  content: "\e169";
}
.fa-door-closed:before {
  content: "\f52a";
}
.fa-door-open:before {
  content: "\f52b";
}
.fa-dove:before {
  content: "\f4ba";
}
.fa-compress-alt:before,
.fa-down-left-and-up-right-to-center:before {
  content: "\f422";
}
.fa-down-long:before,
.fa-long-arrow-alt-down:before {
  content: "\f309";
}
.fa-download:before {
  content: "\f019";
}
.fa-dragon:before {
  content: "\f6d5";
}
.fa-draw-polygon:before {
  content: "\f5ee";
}
.fa-droplet:before,
.fa-tint:before {
  content: "\f043";
}
.fa-droplet-slash:before,
.fa-tint-slash:before {
  content: "\f5c7";
}
.fa-drum:before {
  content: "\f569";
}
.fa-drum-steelpan:before {
  content: "\f56a";
}
.fa-drumstick-bite:before {
  content: "\f6d7";
}
.fa-dumbbell:before {
  content: "\f44b";
}
.fa-dumpster:before {
  content: "\f793";
}
.fa-dumpster-fire:before {
  content: "\f794";
}
.fa-dungeon:before {
  content: "\f6d9";
}
.fa-e:before {
  content: "\45";
}
.fa-deaf:before,
.fa-deafness:before,
.fa-ear-deaf:before,
.fa-hard-of-hearing:before {
  content: "\f2a4";
}
.fa-assistive-listening-systems:before,
.fa-ear-listen:before {
  content: "\f2a2";
}
.fa-earth-africa:before,
.fa-globe-africa:before {
  content: "\f57c";
}
.fa-earth-america:before,
.fa-earth-americas:before,
.fa-earth:before,
.fa-globe-americas:before {
  content: "\f57d";
}
.fa-earth-asia:before,
.fa-globe-asia:before {
  content: "\f57e";
}
.fa-earth-europe:before,
.fa-globe-europe:before {
  content: "\f7a2";
}
.fa-earth-oceania:before,
.fa-globe-oceania:before {
  content: "\e47b";
}
.fa-egg:before {
  content: "\f7fb";
}
.fa-eject:before {
  content: "\f052";
}
.fa-elevator:before {
  content: "\e16d";
}
.fa-ellipsis-h:before,
.fa-ellipsis:before {
  content: "\f141";
}
.fa-ellipsis-v:before,
.fa-ellipsis-vertical:before {
  content: "\f142";
}
.fa-envelope:before {
  content: "\f0e0";
}
.fa-envelope-circle-check:before {
  content: "\e4e8";
}
.fa-envelope-open:before {
  content: "\f2b6";
}
.fa-envelope-open-text:before {
  content: "\f658";
}
.fa-envelopes-bulk:before,
.fa-mail-bulk:before {
  content: "\f674";
}
.fa-equals:before {
  content: "\3d";
}
.fa-eraser:before {
  content: "\f12d";
}
.fa-ethernet:before {
  content: "\f796";
}
.fa-eur:before,
.fa-euro-sign:before,
.fa-euro:before {
  content: "\f153";
}
.fa-exclamation:before {
  content: "\21";
}
.fa-expand:before {
  content: "\f065";
}
.fa-explosion:before {
  content: "\e4e9";
}
.fa-eye:before {
  content: "\f06e";
}
.fa-eye-dropper-empty:before,
.fa-eye-dropper:before,
.fa-eyedropper:before {
  content: "\f1fb";
}
.fa-eye-low-vision:before,
.fa-low-vision:before {
  content: "\f2a8";
}
.fa-eye-slash:before {
  content: "\f070";
}
.fa-f:before {
  content: "\46";
}
.fa-angry:before,
.fa-face-angry:before {
  content: "\f556";
}
.fa-dizzy:before,
.fa-face-dizzy:before {
  content: "\f567";
}
.fa-face-flushed:before,
.fa-flushed:before {
  content: "\f579";
}
.fa-face-frown:before,
.fa-frown:before {
  content: "\f119";
}
.fa-face-frown-open:before,
.fa-frown-open:before {
  content: "\f57a";
}
.fa-face-grimace:before,
.fa-grimace:before {
  content: "\f57f";
}
.fa-face-grin:before,
.fa-grin:before {
  content: "\f580";
}
.fa-face-grin-beam:before,
.fa-grin-beam:before {
  content: "\f582";
}
.fa-face-grin-beam-sweat:before,
.fa-grin-beam-sweat:before {
  content: "\f583";
}
.fa-face-grin-hearts:before,
.fa-grin-hearts:before {
  content: "\f584";
}
.fa-face-grin-squint:before,
.fa-grin-squint:before {
  content: "\f585";
}
.fa-face-grin-squint-tears:before,
.fa-grin-squint-tears:before {
  content: "\f586";
}
.fa-face-grin-stars:before,
.fa-grin-stars:before {
  content: "\f587";
}
.fa-face-grin-tears:before,
.fa-grin-tears:before {
  content: "\f588";
}
.fa-face-grin-tongue:before,
.fa-grin-tongue:before {
  content: "\f589";
}
.fa-face-grin-tongue-squint:before,
.fa-grin-tongue-squint:before {
  content: "\f58a";
}
.fa-face-grin-tongue-wink:before,
.fa-grin-tongue-wink:before {
  content: "\f58b";
}
.fa-face-grin-wide:before,
.fa-grin-alt:before {
  content: "\f581";
}
.fa-face-grin-wink:before,
.fa-grin-wink:before {
  content: "\f58c";
}
.fa-face-kiss:before,
.fa-kiss:before {
  content: "\f596";
}
.fa-face-kiss-beam:before,
.fa-kiss-beam:before {
  content: "\f597";
}
.fa-face-kiss-wink-heart:before,
.fa-kiss-wink-heart:before {
  content: "\f598";
}
.fa-face-laugh:before,
.fa-laugh:before {
  content: "\f599";
}
.fa-face-laugh-beam:before,
.fa-laugh-beam:before {
  content: "\f59a";
}
.fa-face-laugh-squint:before,
.fa-laugh-squint:before {
  content: "\f59b";
}
.fa-face-laugh-wink:before,
.fa-laugh-wink:before {
  content: "\f59c";
}
.fa-face-meh:before,
.fa-meh:before {
  content: "\f11a";
}
.fa-face-meh-blank:before,
.fa-meh-blank:before {
  content: "\f5a4";
}
.fa-face-rolling-eyes:before,
.fa-meh-rolling-eyes:before {
  content: "\f5a5";
}
.fa-face-sad-cry:before,
.fa-sad-cry:before {
  content: "\f5b3";
}
.fa-face-sad-tear:before,
.fa-sad-tear:before {
  content: "\f5b4";
}
.fa-face-smile:before,
.fa-smile:before {
  content: "\f118";
}
.fa-face-smile-beam:before,
.fa-smile-beam:before {
  content: "\f5b8";
}
.fa-face-smile-wink:before,
.fa-smile-wink:before {
  content: "\f4da";
}
.fa-face-surprise:before,
.fa-surprise:before {
  content: "\f5c2";
}
.fa-face-tired:before,
.fa-tired:before {
  content: "\f5c8";
}
.fa-fan:before {
  content: "\f863";
}
.fa-faucet:before {
  content: "\e005";
}
.fa-faucet-drip:before {
  content: "\e006";
}
.fa-fax:before {
  content: "\f1ac";
}
.fa-feather:before {
  content: "\f52d";
}
.fa-feather-alt:before,
.fa-feather-pointed:before {
  content: "\f56b";
}
.fa-ferry:before {
  content: "\e4ea";
}
.fa-file:before {
  content: "\f15b";
}
.fa-file-arrow-down:before,
.fa-file-download:before {
  content: "\f56d";
}
.fa-file-arrow-up:before,
.fa-file-upload:before {
  content: "\f574";
}
.fa-file-audio:before {
  content: "\f1c7";
}
.fa-file-circle-check:before {
  content: "\e493";
}
.fa-file-circle-exclamation:before {
  content: "\e4eb";
}
.fa-file-circle-minus:before {
  content: "\e4ed";
}
.fa-file-circle-plus:before {
  content: "\e4ee";
}
.fa-file-circle-question:before {
  content: "\e4ef";
}
.fa-file-circle-xmark:before {
  content: "\e494";
}
.fa-file-code:before {
  content: "\f1c9";
}
.fa-file-contract:before {
  content: "\f56c";
}
.fa-file-csv:before {
  content: "\f6dd";
}
.fa-file-excel:before {
  content: "\f1c3";
}
.fa-arrow-right-from-file:before,
.fa-file-export:before {
  content: "\f56e";
}
.fa-file-image:before {
  content: "\f1c5";
}
.fa-arrow-right-to-file:before,
.fa-file-import:before {
  content: "\f56f";
}
.fa-file-invoice:before {
  content: "\f570";
}
.fa-file-invoice-dollar:before {
  content: "\f571";
}
.fa-file-alt:before,
.fa-file-lines:before,
.fa-file-text:before {
  content: "\f15c";
}
.fa-file-medical:before {
  content: "\f477";
}
.fa-file-pdf:before {
  content: "\f1c1";
}
.fa-file-edit:before,
.fa-file-pen:before {
  content: "\f31c";
}
.fa-file-powerpoint:before {
  content: "\f1c4";
}
.fa-file-prescription:before {
  content: "\f572";
}
.fa-file-shield:before {
  content: "\e4f0";
}
.fa-file-signature:before {
  content: "\f573";
}
.fa-file-video:before {
  content: "\f1c8";
}
.fa-file-medical-alt:before,
.fa-file-waveform:before {
  content: "\f478";
}
.fa-file-word:before {
  content: "\f1c2";
}
.fa-file-archive:before,
.fa-file-zipper:before {
  content: "\f1c6";
}
.fa-fill:before {
  content: "\f575";
}
.fa-fill-drip:before {
  content: "\f576";
}
.fa-film:before {
  content: "\f008";
}
.fa-filter:before {
  content: "\f0b0";
}
.fa-filter-circle-dollar:before,
.fa-funnel-dollar:before {
  content: "\f662";
}
.fa-filter-circle-xmark:before {
  content: "\e17b";
}
.fa-fingerprint:before {
  content: "\f577";
}
.fa-fire:before {
  content: "\f06d";
}
.fa-fire-burner:before {
  content: "\e4f1";
}
.fa-fire-extinguisher:before {
  content: "\f134";
}
.fa-fire-alt:before,
.fa-fire-flame-curved:before {
  content: "\f7e4";
}
.fa-burn:before,
.fa-fire-flame-simple:before {
  content: "\f46a";
}
.fa-fish:before {
  content: "\f578";
}
.fa-fish-fins:before {
  content: "\e4f2";
}
.fa-flag:before {
  content: "\f024";
}
.fa-flag-checkered:before {
  content: "\f11e";
}
.fa-flag-usa:before {
  content: "\f74d";
}
.fa-flask:before {
  content: "\f0c3";
}
.fa-flask-vial:before {
  content: "\e4f3";
}
.fa-floppy-disk:before,
.fa-save:before {
  content: "\f0c7";
}
.fa-florin-sign:before {
  content: "\e184";
}
.fa-folder-blank:before,
.fa-folder:before {
  content: "\f07b";
}
.fa-folder-closed:before {
  content: "\e185";
}
.fa-folder-minus:before {
  content: "\f65d";
}
.fa-folder-open:before {
  content: "\f07c";
}
.fa-folder-plus:before {
  content: "\f65e";
}
.fa-folder-tree:before {
  content: "\f802";
}
.fa-font:before {
  content: "\f031";
}
.fa-football-ball:before,
.fa-football:before {
  content: "\f44e";
}
.fa-forward:before {
  content: "\f04e";
}
.fa-fast-forward:before,
.fa-forward-fast:before {
  content: "\f050";
}
.fa-forward-step:before,
.fa-step-forward:before {
  content: "\f051";
}
.fa-franc-sign:before {
  content: "\e18f";
}
.fa-frog:before {
  content: "\f52e";
}
.fa-futbol-ball:before,
.fa-futbol:before,
.fa-soccer-ball:before {
  content: "\f1e3";
}
.fa-g:before {
  content: "\47";
}
.fa-gamepad:before {
  content: "\f11b";
}
.fa-gas-pump:before {
  content: "\f52f";
}
.fa-dashboard:before,
.fa-gauge-med:before,
.fa-gauge:before,
.fa-tachometer-alt-average:before {
  content: "\f624";
}
.fa-gauge-high:before,
.fa-tachometer-alt-fast:before,
.fa-tachometer-alt:before {
  content: "\f625";
}
.fa-gauge-simple-med:before,
.fa-gauge-simple:before,
.fa-tachometer-average:before {
  content: "\f629";
}
.fa-gauge-simple-high:before,
.fa-tachometer-fast:before,
.fa-tachometer:before {
  content: "\f62a";
}
.fa-gavel:before,
.fa-legal:before {
  content: "\f0e3";
}
.fa-cog:before,
.fa-gear:before {
  content: "\f013";
}
.fa-cogs:before,
.fa-gears:before {
  content: "\f085";
}
.fa-gem:before {
  content: "\f3a5";
}
.fa-genderless:before {
  content: "\f22d";
}
.fa-ghost:before {
  content: "\f6e2";
}
.fa-gift:before {
  content: "\f06b";
}
.fa-gifts:before {
  content: "\f79c";
}
.fa-glass-water:before {
  content: "\e4f4";
}
.fa-glass-water-droplet:before {
  content: "\e4f5";
}
.fa-glasses:before {
  content: "\f530";
}
.fa-globe:before {
  content: "\f0ac";
}
.fa-golf-ball-tee:before,
.fa-golf-ball:before {
  content: "\f450";
}
.fa-gopuram:before {
  content: "\f664";
}
.fa-graduation-cap:before,
.fa-mortar-board:before {
  content: "\f19d";
}
.fa-greater-than:before {
  content: "\3e";
}
.fa-greater-than-equal:before {
  content: "\f532";
}
.fa-grip-horizontal:before,
.fa-grip:before {
  content: "\f58d";
}
.fa-grip-lines:before {
  content: "\f7a4";
}
.fa-grip-lines-vertical:before {
  content: "\f7a5";
}
.fa-grip-vertical:before {
  content: "\f58e";
}
.fa-group-arrows-rotate:before {
  content: "\e4f6";
}
.fa-guarani-sign:before {
  content: "\e19a";
}
.fa-guitar:before {
  content: "\f7a6";
}
.fa-gun:before {
  content: "\e19b";
}
.fa-h:before {
  content: "\48";
}
.fa-hammer:before {
  content: "\f6e3";
}
.fa-hamsa:before {
  content: "\f665";
}
.fa-hand-paper:before,
.fa-hand:before {
  content: "\f256";
}
.fa-hand-back-fist:before,
.fa-hand-rock:before {
  content: "\f255";
}
.fa-allergies:before,
.fa-hand-dots:before {
  content: "\f461";
}
.fa-fist-raised:before,
.fa-hand-fist:before {
  content: "\f6de";
}
.fa-hand-holding:before {
  content: "\f4bd";
}
.fa-hand-holding-dollar:before,
.fa-hand-holding-usd:before {
  content: "\f4c0";
}
.fa-hand-holding-droplet:before,
.fa-hand-holding-water:before {
  content: "\f4c1";
}
.fa-hand-holding-hand:before {
  content: "\e4f7";
}
.fa-hand-holding-heart:before {
  content: "\f4be";
}
.fa-hand-holding-medical:before {
  content: "\e05c";
}
.fa-hand-lizard:before {
  content: "\f258";
}
.fa-hand-middle-finger:before {
  content: "\f806";
}
.fa-hand-peace:before {
  content: "\f25b";
}
.fa-hand-point-down:before {
  content: "\f0a7";
}
.fa-hand-point-left:before {
  content: "\f0a5";
}
.fa-hand-point-right:before {
  content: "\f0a4";
}
.fa-hand-point-up:before {
  content: "\f0a6";
}
.fa-hand-pointer:before {
  content: "\f25a";
}
.fa-hand-scissors:before {
  content: "\f257";
}
.fa-hand-sparkles:before {
  content: "\e05d";
}
.fa-hand-spock:before {
  content: "\f259";
}
.fa-handcuffs:before {
  content: "\e4f8";
}
.fa-hands:before,
.fa-sign-language:before,
.fa-signing:before {
  content: "\f2a7";
}
.fa-american-sign-language-interpreting:before,
.fa-asl-interpreting:before,
.fa-hands-american-sign-language-interpreting:before,
.fa-hands-asl-interpreting:before {
  content: "\f2a3";
}
.fa-hands-bound:before {
  content: "\e4f9";
}
.fa-hands-bubbles:before,
.fa-hands-wash:before {
  content: "\e05e";
}
.fa-hands-clapping:before {
  content: "\e1a8";
}
.fa-hands-holding:before {
  content: "\f4c2";
}
.fa-hands-holding-child:before {
  content: "\e4fa";
}
.fa-hands-holding-circle:before {
  content: "\e4fb";
}
.fa-hands-praying:before,
.fa-praying-hands:before {
  content: "\f684";
}
.fa-handshake:before {
  content: "\f2b5";
}
.fa-hands-helping:before,
.fa-handshake-angle:before {
  content: "\f4c4";
}
.fa-handshake-alt:before,
.fa-handshake-simple:before {
  content: "\f4c6";
}
.fa-handshake-alt-slash:before,
.fa-handshake-simple-slash:before {
  content: "\e05f";
}
.fa-handshake-slash:before {
  content: "\e060";
}
.fa-hanukiah:before {
  content: "\f6e6";
}
.fa-hard-drive:before,
.fa-hdd:before {
  content: "\f0a0";
}
.fa-hashtag:before {
  content: "\23";
}
.fa-hat-cowboy:before {
  content: "\f8c0";
}
.fa-hat-cowboy-side:before {
  content: "\f8c1";
}
.fa-hat-wizard:before {
  content: "\f6e8";
}
.fa-head-side-cough:before {
  content: "\e061";
}
.fa-head-side-cough-slash:before {
  content: "\e062";
}
.fa-head-side-mask:before {
  content: "\e063";
}
.fa-head-side-virus:before {
  content: "\e064";
}
.fa-header:before,
.fa-heading:before {
  content: "\f1dc";
}
.fa-headphones:before {
  content: "\f025";
}
.fa-headphones-alt:before,
.fa-headphones-simple:before {
  content: "\f58f";
}
.fa-headset:before {
  content: "\f590";
}
.fa-heart:before {
  content: "\f004";
}
.fa-heart-circle-bolt:before {
  content: "\e4fc";
}
.fa-heart-circle-check:before {
  content: "\e4fd";
}
.fa-heart-circle-exclamation:before {
  content: "\e4fe";
}
.fa-heart-circle-minus:before {
  content: "\e4ff";
}
.fa-heart-circle-plus:before {
  content: "\e500";
}
.fa-heart-circle-xmark:before {
  content: "\e501";
}
.fa-heart-broken:before,
.fa-heart-crack:before {
  content: "\f7a9";
}
.fa-heart-pulse:before,
.fa-heartbeat:before {
  content: "\f21e";
}
.fa-helicopter:before {
  content: "\f533";
}
.fa-helicopter-symbol:before {
  content: "\e502";
}
.fa-hard-hat:before,
.fa-hat-hard:before,
.fa-helmet-safety:before {
  content: "\f807";
}
.fa-helmet-un:before {
  content: "\e503";
}
.fa-highlighter:before {
  content: "\f591";
}
.fa-hill-avalanche:before {
  content: "\e507";
}
.fa-hill-rockslide:before {
  content: "\e508";
}
.fa-hippo:before {
  content: "\f6ed";
}
.fa-hockey-puck:before {
  content: "\f453";
}
.fa-holly-berry:before {
  content: "\f7aa";
}
.fa-horse:before {
  content: "\f6f0";
}
.fa-horse-head:before {
  content: "\f7ab";
}
.fa-hospital-alt:before,
.fa-hospital-wide:before,
.fa-hospital:before {
  content: "\f0f8";
}
.fa-hospital-user:before {
  content: "\f80d";
}
.fa-hot-tub-person:before,
.fa-hot-tub:before {
  content: "\f593";
}
.fa-hotdog:before {
  content: "\f80f";
}
.fa-hotel:before {
  content: "\f594";
}
.fa-hourglass-2:before,
.fa-hourglass-half:before,
.fa-hourglass:before {
  content: "\f254";
}
.fa-hourglass-empty:before {
  content: "\f252";
}
.fa-hourglass-3:before,
.fa-hourglass-end:before {
  content: "\f253";
}
.fa-hourglass-1:before,
.fa-hourglass-start:before {
  content: "\f251";
}
.fa-home-alt:before,
.fa-home-lg-alt:before,
.fa-home:before,
.fa-house:before {
  content: "\f015";
}
.fa-home-lg:before,
.fa-house-chimney:before {
  content: "\e3af";
}
.fa-house-chimney-crack:before,
.fa-house-damage:before {
  content: "\f6f1";
}
.fa-clinic-medical:before,
.fa-house-chimney-medical:before {
  content: "\f7f2";
}
.fa-house-chimney-user:before {
  content: "\e065";
}
.fa-house-chimney-window:before {
  content: "\e00d";
}
.fa-house-circle-check:before {
  content: "\e509";
}
.fa-house-circle-exclamation:before {
  content: "\e50a";
}
.fa-house-circle-xmark:before {
  content: "\e50b";
}
.fa-house-crack:before {
  content: "\e3b1";
}
.fa-house-fire:before {
  content: "\e50c";
}
.fa-house-flag:before {
  content: "\e50d";
}
.fa-house-flood-water:before {
  content: "\e50e";
}
.fa-house-flood-water-circle-arrow-right:before {
  content: "\e50f";
}
.fa-house-laptop:before,
.fa-laptop-house:before {
  content: "\e066";
}
.fa-house-lock:before {
  content: "\e510";
}
.fa-house-medical:before {
  content: "\e3b2";
}
.fa-house-medical-circle-check:before {
  content: "\e511";
}
.fa-house-medical-circle-exclamation:before {
  content: "\e512";
}
.fa-house-medical-circle-xmark:before {
  content: "\e513";
}
.fa-house-medical-flag:before {
  content: "\e514";
}
.fa-house-signal:before {
  content: "\e012";
}
.fa-house-tsunami:before {
  content: "\e515";
}
.fa-home-user:before,
.fa-house-user:before {
  content: "\e1b0";
}
.fa-hryvnia-sign:before,
.fa-hryvnia:before {
  content: "\f6f2";
}
.fa-hurricane:before {
  content: "\f751";
}
.fa-i:before {
  content: "\49";
}
.fa-i-cursor:before {
  content: "\f246";
}
.fa-ice-cream:before {
  content: "\f810";
}
.fa-icicles:before {
  content: "\f7ad";
}
.fa-heart-music-camera-bolt:before,
.fa-icons:before {
  content: "\f86d";
}
.fa-id-badge:before {
  content: "\f2c1";
}
.fa-drivers-license:before,
.fa-id-card:before {
  content: "\f2c2";
}
.fa-id-card-alt:before,
.fa-id-card-clip:before {
  content: "\f47f";
}
.fa-igloo:before {
  content: "\f7ae";
}
.fa-image:before {
  content: "\f03e";
}
.fa-image-portrait:before,
.fa-portrait:before {
  content: "\f3e0";
}
.fa-images:before {
  content: "\f302";
}
.fa-inbox:before {
  content: "\f01c";
}
.fa-indent:before {
  content: "\f03c";
}
.fa-indian-rupee-sign:before,
.fa-indian-rupee:before,
.fa-inr:before {
  content: "\e1bc";
}
.fa-industry:before {
  content: "\f275";
}
.fa-infinity:before {
  content: "\f534";
}
.fa-info:before {
  content: "\f129";
}
.fa-italic:before {
  content: "\f033";
}
.fa-j:before {
  content: "\4a";
}
.fa-jar:before {
  content: "\e516";
}
.fa-jar-wheat:before {
  content: "\e517";
}
.fa-jedi:before {
  content: "\f669";
}
.fa-fighter-jet:before,
.fa-jet-fighter:before {
  content: "\f0fb";
}
.fa-jet-fighter-up:before {
  content: "\e518";
}
.fa-joint:before {
  content: "\f595";
}
.fa-jug-detergent:before {
  content: "\e519";
}
.fa-k:before {
  content: "\4b";
}
.fa-kaaba:before {
  content: "\f66b";
}
.fa-key:before {
  content: "\f084";
}
.fa-keyboard:before {
  content: "\f11c";
}
.fa-khanda:before {
  content: "\f66d";
}
.fa-kip-sign:before {
  content: "\e1c4";
}
.fa-first-aid:before,
.fa-kit-medical:before {
  content: "\f479";
}
.fa-kitchen-set:before {
  content: "\e51a";
}
.fa-kiwi-bird:before {
  content: "\f535";
}
.fa-l:before {
  content: "\4c";
}
.fa-land-mine-on:before {
  content: "\e51b";
}
.fa-landmark:before {
  content: "\f66f";
}
.fa-landmark-alt:before,
.fa-landmark-dome:before {
  content: "\f752";
}
.fa-landmark-flag:before {
  content: "\e51c";
}
.fa-language:before {
  content: "\f1ab";
}
.fa-laptop:before {
  content: "\f109";
}
.fa-laptop-code:before {
  content: "\f5fc";
}
.fa-laptop-file:before {
  content: "\e51d";
}
.fa-laptop-medical:before {
  content: "\f812";
}
.fa-lari-sign:before {
  content: "\e1c8";
}
.fa-layer-group:before {
  content: "\f5fd";
}
.fa-leaf:before {
  content: "\f06c";
}
.fa-left-long:before,
.fa-long-arrow-alt-left:before {
  content: "\f30a";
}
.fa-arrows-alt-h:before,
.fa-left-right:before {
  content: "\f337";
}
.fa-lemon:before {
  content: "\f094";
}
.fa-less-than:before {
  content: "\3c";
}
.fa-less-than-equal:before {
  content: "\f537";
}
.fa-life-ring:before {
  content: "\f1cd";
}
.fa-lightbulb:before {
  content: "\f0eb";
}
.fa-lines-leaning:before {
  content: "\e51e";
}
.fa-chain:before,
.fa-link:before {
  content: "\f0c1";
}
.fa-chain-broken:before,
.fa-chain-slash:before,
.fa-link-slash:before,
.fa-unlink:before {
  content: "\f127";
}
.fa-lira-sign:before {
  content: "\f195";
}
.fa-list-squares:before,
.fa-list:before {
  content: "\f03a";
}
.fa-list-check:before,
.fa-tasks:before {
  content: "\f0ae";
}
.fa-list-1-2:before,
.fa-list-numeric:before,
.fa-list-ol:before {
  content: "\f0cb";
}
.fa-list-dots:before,
.fa-list-ul:before {
  content: "\f0ca";
}
.fa-litecoin-sign:before {
  content: "\e1d3";
}
.fa-location-arrow:before {
  content: "\f124";
}
.fa-location-crosshairs:before,
.fa-location:before {
  content: "\f601";
}
.fa-location-dot:before,
.fa-map-marker-alt:before {
  content: "\f3c5";
}
.fa-location-pin:before,
.fa-map-marker:before {
  content: "\f041";
}
.fa-location-pin-lock:before {
  content: "\e51f";
}
.fa-lock:before {
  content: "\f023";
}
.fa-lock-open:before {
  content: "\f3c1";
}
.fa-locust:before {
  content: "\e520";
}
.fa-lungs:before {
  content: "\f604";
}
.fa-lungs-virus:before {
  content: "\e067";
}
.fa-m:before {
  content: "\4d";
}
.fa-magnet:before {
  content: "\f076";
}
.fa-magnifying-glass:before,
.fa-search:before {
  content: "\f002";
}
.fa-magnifying-glass-arrow-right:before {
  content: "\e521";
}
.fa-magnifying-glass-chart:before {
  content: "\e522";
}
.fa-magnifying-glass-dollar:before,
.fa-search-dollar:before {
  content: "\f688";
}
.fa-magnifying-glass-location:before,
.fa-search-location:before {
  content: "\f689";
}
.fa-magnifying-glass-minus:before,
.fa-search-minus:before {
  content: "\f010";
}
.fa-magnifying-glass-plus:before,
.fa-search-plus:before {
  content: "\f00e";
}
.fa-manat-sign:before {
  content: "\e1d5";
}
.fa-map:before {
  content: "\f279";
}
.fa-map-location:before,
.fa-map-marked:before {
  content: "\f59f";
}
.fa-map-location-dot:before,
.fa-map-marked-alt:before {
  content: "\f5a0";
}
.fa-map-pin:before {
  content: "\f276";
}
.fa-marker:before {
  content: "\f5a1";
}
.fa-mars:before {
  content: "\f222";
}
.fa-mars-and-venus:before {
  content: "\f224";
}
.fa-mars-and-venus-burst:before {
  content: "\e523";
}
.fa-mars-double:before {
  content: "\f227";
}
.fa-mars-stroke:before {
  content: "\f229";
}
.fa-mars-stroke-h:before,
.fa-mars-stroke-right:before {
  content: "\f22b";
}
.fa-mars-stroke-up:before,
.fa-mars-stroke-v:before {
  content: "\f22a";
}
.fa-glass-martini-alt:before,
.fa-martini-glass:before {
  content: "\f57b";
}
.fa-cocktail:before,
.fa-martini-glass-citrus:before {
  content: "\f561";
}
.fa-glass-martini:before,
.fa-martini-glass-empty:before {
  content: "\f000";
}
.fa-mask:before {
  content: "\f6fa";
}
.fa-mask-face:before {
  content: "\e1d7";
}
.fa-mask-ventilator:before {
  content: "\e524";
}
.fa-masks-theater:before,
.fa-theater-masks:before {
  content: "\f630";
}
.fa-mattress-pillow:before {
  content: "\e525";
}
.fa-expand-arrows-alt:before,
.fa-maximize:before {
  content: "\f31e";
}
.fa-medal:before {
  content: "\f5a2";
}
.fa-memory:before {
  content: "\f538";
}
.fa-menorah:before {
  content: "\f676";
}
.fa-mercury:before {
  content: "\f223";
}
.fa-comment-alt:before,
.fa-message:before {
  content: "\f27a";
}
.fa-meteor:before {
  content: "\f753";
}
.fa-microchip:before {
  content: "\f2db";
}
.fa-microphone:before {
  content: "\f130";
}
.fa-microphone-alt:before,
.fa-microphone-lines:before {
  content: "\f3c9";
}
.fa-microphone-alt-slash:before,
.fa-microphone-lines-slash:before {
  content: "\f539";
}
.fa-microphone-slash:before {
  content: "\f131";
}
.fa-microscope:before {
  content: "\f610";
}
.fa-mill-sign:before {
  content: "\e1ed";
}
.fa-compress-arrows-alt:before,
.fa-minimize:before {
  content: "\f78c";
}
.fa-minus:before,
.fa-subtract:before {
  content: "\f068";
}
.fa-mitten:before {
  content: "\f7b5";
}
.fa-mobile-android:before,
.fa-mobile-phone:before,
.fa-mobile:before {
  content: "\f3ce";
}
.fa-mobile-button:before {
  content: "\f10b";
}
.fa-mobile-retro:before {
  content: "\e527";
}
.fa-mobile-android-alt:before,
.fa-mobile-screen:before {
  content: "\f3cf";
}
.fa-mobile-alt:before,
.fa-mobile-screen-button:before {
  content: "\f3cd";
}
.fa-money-bill:before {
  content: "\f0d6";
}
.fa-money-bill-1:before,
.fa-money-bill-alt:before {
  content: "\f3d1";
}
.fa-money-bill-1-wave:before,
.fa-money-bill-wave-alt:before {
  content: "\f53b";
}
.fa-money-bill-transfer:before {
  content: "\e528";
}
.fa-money-bill-trend-up:before {
  content: "\e529";
}
.fa-money-bill-wave:before {
  content: "\f53a";
}
.fa-money-bill-wheat:before {
  content: "\e52a";
}
.fa-money-bills:before {
  content: "\e1f3";
}
.fa-money-check:before {
  content: "\f53c";
}
.fa-money-check-alt:before,
.fa-money-check-dollar:before {
  content: "\f53d";
}
.fa-monument:before {
  content: "\f5a6";
}
.fa-moon:before {
  content: "\f186";
}
.fa-mortar-pestle:before {
  content: "\f5a7";
}
.fa-mosque:before {
  content: "\f678";
}
.fa-mosquito:before {
  content: "\e52b";
}
.fa-mosquito-net:before {
  content: "\e52c";
}
.fa-motorcycle:before {
  content: "\f21c";
}
.fa-mound:before {
  content: "\e52d";
}
.fa-mountain:before {
  content: "\f6fc";
}
.fa-mountain-city:before {
  content: "\e52e";
}
.fa-mountain-sun:before {
  content: "\e52f";
}
.fa-mug-hot:before {
  content: "\f7b6";
}
.fa-coffee:before,
.fa-mug-saucer:before {
  content: "\f0f4";
}
.fa-music:before {
  content: "\f001";
}
.fa-n:before {
  content: "\4e";
}
.fa-naira-sign:before {
  content: "\e1f6";
}
.fa-network-wired:before {
  content: "\f6ff";
}
.fa-neuter:before {
  content: "\f22c";
}
.fa-newspaper:before {
  content: "\f1ea";
}
.fa-not-equal:before {
  content: "\f53e";
}
.fa-note-sticky:before,
.fa-sticky-note:before {
  content: "\f249";
}
.fa-notes-medical:before {
  content: "\f481";
}
.fa-o:before {
  content: "\4f";
}
.fa-object-group:before {
  content: "\f247";
}
.fa-object-ungroup:before {
  content: "\f248";
}
.fa-oil-can:before {
  content: "\f613";
}
.fa-oil-well:before {
  content: "\e532";
}
.fa-om:before {
  content: "\f679";
}
.fa-otter:before {
  content: "\f700";
}
.fa-dedent:before,
.fa-outdent:before {
  content: "\f03b";
}
.fa-p:before {
  content: "\50";
}
.fa-pager:before {
  content: "\f815";
}
.fa-paint-roller:before {
  content: "\f5aa";
}
.fa-paint-brush:before,
.fa-paintbrush:before {
  content: "\f1fc";
}
.fa-palette:before {
  content: "\f53f";
}
.fa-pallet:before {
  content: "\f482";
}
.fa-panorama:before {
  content: "\e209";
}
.fa-paper-plane:before {
  content: "\f1d8";
}
.fa-paperclip:before {
  content: "\f0c6";
}
.fa-parachute-box:before {
  content: "\f4cd";
}
.fa-paragraph:before {
  content: "\f1dd";
}
.fa-passport:before {
  content: "\f5ab";
}
.fa-file-clipboard:before,
.fa-paste:before {
  content: "\f0ea";
}
.fa-pause:before {
  content: "\f04c";
}
.fa-paw:before {
  content: "\f1b0";
}
.fa-peace:before {
  content: "\f67c";
}
.fa-pen:before {
  content: "\f304";
}
.fa-pen-alt:before,
.fa-pen-clip:before {
  content: "\f305";
}
.fa-pen-fancy:before {
  content: "\f5ac";
}
.fa-pen-nib:before {
  content: "\f5ad";
}
.fa-pen-ruler:before,
.fa-pencil-ruler:before {
  content: "\f5ae";
}
.fa-edit:before,
.fa-pen-to-square:before {
  content: "\f044";
}
.fa-pencil-alt:before,
.fa-pencil:before {
  content: "\f303";
}
.fa-people-arrows-left-right:before,
.fa-people-arrows:before {
  content: "\e068";
}
.fa-people-carry-box:before,
.fa-people-carry:before {
  content: "\f4ce";
}
.fa-people-group:before {
  content: "\e533";
}
.fa-people-line:before {
  content: "\e534";
}
.fa-people-pulling:before {
  content: "\e535";
}
.fa-people-robbery:before {
  content: "\e536";
}
.fa-people-roof:before {
  content: "\e537";
}
.fa-pepper-hot:before {
  content: "\f816";
}
.fa-percent:before,
.fa-percentage:before {
  content: "\25";
}
.fa-male:before,
.fa-person:before {
  content: "\f183";
}
.fa-person-arrow-down-to-line:before {
  content: "\e538";
}
.fa-person-arrow-up-from-line:before {
  content: "\e539";
}
.fa-biking:before,
.fa-person-biking:before {
  content: "\f84a";
}
.fa-person-booth:before {
  content: "\f756";
}
.fa-person-breastfeeding:before {
  content: "\e53a";
}
.fa-person-burst:before {
  content: "\e53b";
}
.fa-person-cane:before {
  content: "\e53c";
}
.fa-person-chalkboard:before {
  content: "\e53d";
}
.fa-person-circle-check:before {
  content: "\e53e";
}
.fa-person-circle-exclamation:before {
  content: "\e53f";
}
.fa-person-circle-minus:before {
  content: "\e540";
}
.fa-person-circle-plus:before {
  content: "\e541";
}
.fa-person-circle-question:before {
  content: "\e542";
}
.fa-person-circle-xmark:before {
  content: "\e543";
}
.fa-digging:before,
.fa-person-digging:before {
  content: "\f85e";
}
.fa-diagnoses:before,
.fa-person-dots-from-line:before {
  content: "\f470";
}
.fa-female:before,
.fa-person-dress:before {
  content: "\f182";
}
.fa-person-dress-burst:before {
  content: "\e544";
}
.fa-person-drowning:before {
  content: "\e545";
}
.fa-person-falling:before {
  content: "\e546";
}
.fa-person-falling-burst:before {
  content: "\e547";
}
.fa-person-half-dress:before {
  content: "\e548";
}
.fa-person-harassing:before {
  content: "\e549";
}
.fa-hiking:before,
.fa-person-hiking:before {
  content: "\f6ec";
}
.fa-person-military-pointing:before {
  content: "\e54a";
}
.fa-person-military-rifle:before {
  content: "\e54b";
}
.fa-person-military-to-person:before {
  content: "\e54c";
}
.fa-person-praying:before,
.fa-pray:before {
  content: "\f683";
}
.fa-person-pregnant:before {
  content: "\e31e";
}
.fa-person-rays:before {
  content: "\e54d";
}
.fa-person-rifle:before {
  content: "\e54e";
}
.fa-person-running:before,
.fa-running:before {
  content: "\f70c";
}
.fa-person-shelter:before {
  content: "\e54f";
}
.fa-person-skating:before,
.fa-skating:before {
  content: "\f7c5";
}
.fa-person-skiing:before,
.fa-skiing:before {
  content: "\f7c9";
}
.fa-person-skiing-nordic:before,
.fa-skiing-nordic:before {
  content: "\f7ca";
}
.fa-person-snowboarding:before,
.fa-snowboarding:before {
  content: "\f7ce";
}
.fa-person-swimming:before,
.fa-swimmer:before {
  content: "\f5c4";
}
.fa-person-through-window:before {
  content: "\e433";
}
.fa-person-walking:before,
.fa-walking:before {
  content: "\f554";
}
.fa-person-walking-arrow-loop-left:before {
  content: "\e551";
}
.fa-person-walking-arrow-right:before {
  content: "\e552";
}
.fa-person-walking-dashed-line-arrow-right:before {
  content: "\e553";
}
.fa-person-walking-luggage:before {
  content: "\e554";
}
.fa-blind:before,
.fa-person-walking-with-cane:before {
  content: "\f29d";
}
.fa-peseta-sign:before {
  content: "\e221";
}
.fa-peso-sign:before {
  content: "\e222";
}
.fa-phone:before {
  content: "\f095";
}
.fa-phone-alt:before,
.fa-phone-flip:before {
  content: "\f879";
}
.fa-phone-slash:before {
  content: "\f3dd";
}
.fa-phone-volume:before,
.fa-volume-control-phone:before {
  content: "\f2a0";
}
.fa-photo-film:before,
.fa-photo-video:before {
  content: "\f87c";
}
.fa-piggy-bank:before {
  content: "\f4d3";
}
.fa-pills:before {
  content: "\f484";
}
.fa-pizza-slice:before {
  content: "\f818";
}
.fa-place-of-worship:before {
  content: "\f67f";
}
.fa-plane:before {
  content: "\f072";
}
.fa-plane-arrival:before {
  content: "\f5af";
}
.fa-plane-circle-check:before {
  content: "\e555";
}
.fa-plane-circle-exclamation:before {
  content: "\e556";
}
.fa-plane-circle-xmark:before {
  content: "\e557";
}
.fa-plane-departure:before {
  content: "\f5b0";
}
.fa-plane-lock:before {
  content: "\e558";
}
.fa-plane-slash:before {
  content: "\e069";
}
.fa-plane-up:before {
  content: "\e22d";
}
.fa-plant-wilt:before {
  content: "\e43b";
}
.fa-plate-wheat:before {
  content: "\e55a";
}
.fa-play:before {
  content: "\f04b";
}
.fa-plug:before {
  content: "\f1e6";
}
.fa-plug-circle-bolt:before {
  content: "\e55b";
}
.fa-plug-circle-check:before {
  content: "\e55c";
}
.fa-plug-circle-exclamation:before {
  content: "\e55d";
}
.fa-plug-circle-minus:before {
  content: "\e55e";
}
.fa-plug-circle-plus:before {
  content: "\e55f";
}
.fa-plug-circle-xmark:before {
  content: "\e560";
}
.fa-add:before,
.fa-plus:before {
  content: "\2b";
}
.fa-plus-minus:before {
  content: "\e43c";
}
.fa-podcast:before {
  content: "\f2ce";
}
.fa-poo:before {
  content: "\f2fe";
}
.fa-poo-bolt:before,
.fa-poo-storm:before {
  content: "\f75a";
}
.fa-poop:before {
  content: "\f619";
}
.fa-power-off:before {
  content: "\f011";
}
.fa-prescription:before {
  content: "\f5b1";
}
.fa-prescription-bottle:before {
  content: "\f485";
}
.fa-prescription-bottle-alt:before,
.fa-prescription-bottle-medical:before {
  content: "\f486";
}
.fa-print:before {
  content: "\f02f";
}
.fa-pump-medical:before {
  content: "\e06a";
}
.fa-pump-soap:before {
  content: "\e06b";
}
.fa-puzzle-piece:before {
  content: "\f12e";
}
.fa-q:before {
  content: "\51";
}
.fa-qrcode:before {
  content: "\f029";
}
.fa-question:before {
  content: "\3f";
}
.fa-quote-left-alt:before,
.fa-quote-left:before {
  content: "\f10d";
}
.fa-quote-right-alt:before,
.fa-quote-right:before {
  content: "\f10e";
}
.fa-r:before {
  content: "\52";
}
.fa-radiation:before {
  content: "\f7b9";
}
.fa-radio:before {
  content: "\f8d7";
}
.fa-rainbow:before {
  content: "\f75b";
}
.fa-ranking-star:before {
  content: "\e561";
}
.fa-receipt:before {
  content: "\f543";
}
.fa-record-vinyl:before {
  content: "\f8d9";
}
.fa-ad:before,
.fa-rectangle-ad:before {
  content: "\f641";
}
.fa-list-alt:before,
.fa-rectangle-list:before {
  content: "\f022";
}
.fa-rectangle-times:before,
.fa-rectangle-xmark:before,
.fa-times-rectangle:before,
.fa-window-close:before {
  content: "\f410";
}
.fa-recycle:before {
  content: "\f1b8";
}
.fa-registered:before {
  content: "\f25d";
}
.fa-repeat:before {
  content: "\f363";
}
.fa-mail-reply:before,
.fa-reply:before {
  content: "\f3e5";
}
.fa-mail-reply-all:before,
.fa-reply-all:before {
  content: "\f122";
}
.fa-republican:before {
  content: "\f75e";
}
.fa-restroom:before {
  content: "\f7bd";
}
.fa-retweet:before {
  content: "\f079";
}
.fa-ribbon:before {
  content: "\f4d6";
}
.fa-right-from-bracket:before,
.fa-sign-out-alt:before {
  content: "\f2f5";
}
.fa-exchange-alt:before,
.fa-right-left:before {
  content: "\f362";
}
.fa-long-arrow-alt-right:before,
.fa-right-long:before {
  content: "\f30b";
}
.fa-right-to-bracket:before,
.fa-sign-in-alt:before {
  content: "\f2f6";
}
.fa-ring:before {
  content: "\f70b";
}
.fa-road:before {
  content: "\f018";
}
.fa-road-barrier:before {
  content: "\e562";
}
.fa-road-bridge:before {
  content: "\e563";
}
.fa-road-circle-check:before {
  content: "\e564";
}
.fa-road-circle-exclamation:before {
  content: "\e565";
}
.fa-road-circle-xmark:before {
  content: "\e566";
}
.fa-road-lock:before {
  content: "\e567";
}
.fa-road-spikes:before {
  content: "\e568";
}
.fa-robot:before {
  content: "\f544";
}
.fa-rocket:before {
  content: "\f135";
}
.fa-rotate:before,
.fa-sync-alt:before {
  content: "\f2f1";
}
.fa-rotate-back:before,
.fa-rotate-backward:before,
.fa-rotate-left:before,
.fa-undo-alt:before {
  content: "\f2ea";
}
.fa-redo-alt:before,
.fa-rotate-forward:before,
.fa-rotate-right:before {
  content: "\f2f9";
}
.fa-route:before {
  content: "\f4d7";
}
.fa-feed:before,
.fa-rss:before {
  content: "\f09e";
}
.fa-rouble:before,
.fa-rub:before,
.fa-ruble-sign:before,
.fa-ruble:before {
  content: "\f158";
}
.fa-rug:before {
  content: "\e569";
}
.fa-ruler:before {
  content: "\f545";
}
.fa-ruler-combined:before {
  content: "\f546";
}
.fa-ruler-horizontal:before {
  content: "\f547";
}
.fa-ruler-vertical:before {
  content: "\f548";
}
.fa-rupee-sign:before,
.fa-rupee:before {
  content: "\f156";
}
.fa-rupiah-sign:before {
  content: "\e23d";
}
.fa-s:before {
  content: "\53";
}
.fa-sack-dollar:before {
  content: "\f81d";
}
.fa-sack-xmark:before {
  content: "\e56a";
}
.fa-sailboat:before {
  content: "\e445";
}
.fa-satellite:before {
  content: "\f7bf";
}
.fa-satellite-dish:before {
  content: "\f7c0";
}
.fa-balance-scale:before,
.fa-scale-balanced:before {
  content: "\f24e";
}
.fa-balance-scale-left:before,
.fa-scale-unbalanced:before {
  content: "\f515";
}
.fa-balance-scale-right:before,
.fa-scale-unbalanced-flip:before {
  content: "\f516";
}
.fa-school:before {
  content: "\f549";
}
.fa-school-circle-check:before {
  content: "\e56b";
}
.fa-school-circle-exclamation:before {
  content: "\e56c";
}
.fa-school-circle-xmark:before {
  content: "\e56d";
}
.fa-school-flag:before {
  content: "\e56e";
}
.fa-school-lock:before {
  content: "\e56f";
}
.fa-cut:before,
.fa-scissors:before {
  content: "\f0c4";
}
.fa-screwdriver:before {
  content: "\f54a";
}
.fa-screwdriver-wrench:before,
.fa-tools:before {
  content: "\f7d9";
}
.fa-scroll:before {
  content: "\f70e";
}
.fa-scroll-torah:before,
.fa-torah:before {
  content: "\f6a0";
}
.fa-sd-card:before {
  content: "\f7c2";
}
.fa-section:before {
  content: "\e447";
}
.fa-seedling:before,
.fa-sprout:before {
  content: "\f4d8";
}
.fa-server:before {
  content: "\f233";
}
.fa-shapes:before,
.fa-triangle-circle-square:before {
  content: "\f61f";
}
.fa-arrow-turn-right:before,
.fa-mail-forward:before,
.fa-share:before {
  content: "\f064";
}
.fa-share-from-square:before,
.fa-share-square:before {
  content: "\f14d";
}
.fa-share-alt:before,
.fa-share-nodes:before {
  content: "\f1e0";
}
.fa-sheet-plastic:before {
  content: "\e571";
}
.fa-ils:before,
.fa-shekel-sign:before,
.fa-shekel:before,
.fa-sheqel-sign:before,
.fa-sheqel:before {
  content: "\f20b";
}
.fa-shield-blank:before,
.fa-shield:before {
  content: "\f132";
}
.fa-shield-cat:before {
  content: "\e572";
}
.fa-shield-dog:before {
  content: "\e573";
}
.fa-shield-alt:before,
.fa-shield-halved:before {
  content: "\f3ed";
}
.fa-shield-heart:before {
  content: "\e574";
}
.fa-shield-virus:before {
  content: "\e06c";
}
.fa-ship:before {
  content: "\f21a";
}
.fa-shirt:before,
.fa-t-shirt:before,
.fa-tshirt:before {
  content: "\f553";
}
.fa-shoe-prints:before {
  content: "\f54b";
}
.fa-shop:before,
.fa-store-alt:before {
  content: "\f54f";
}
.fa-shop-lock:before {
  content: "\e4a5";
}
.fa-shop-slash:before,
.fa-store-alt-slash:before {
  content: "\e070";
}
.fa-shower:before {
  content: "\f2cc";
}
.fa-shrimp:before {
  content: "\e448";
}
.fa-random:before,
.fa-shuffle:before {
  content: "\f074";
}
.fa-shuttle-space:before,
.fa-space-shuttle:before {
  content: "\f197";
}
.fa-sign-hanging:before,
.fa-sign:before {
  content: "\f4d9";
}
.fa-signal-5:before,
.fa-signal-perfect:before,
.fa-signal:before {
  content: "\f012";
}
.fa-signature:before {
  content: "\f5b7";
}
.fa-map-signs:before,
.fa-signs-post:before {
  content: "\f277";
}
.fa-sim-card:before {
  content: "\f7c4";
}
.fa-sink:before {
  content: "\e06d";
}
.fa-sitemap:before {
  content: "\f0e8";
}
.fa-skull:before {
  content: "\f54c";
}
.fa-skull-crossbones:before {
  content: "\f714";
}
.fa-slash:before {
  content: "\f715";
}
.fa-sleigh:before {
  content: "\f7cc";
}
.fa-sliders-h:before,
.fa-sliders:before {
  content: "\f1de";
}
.fa-smog:before {
  content: "\f75f";
}
.fa-smoking:before {
  content: "\f48d";
}
.fa-snowflake:before {
  content: "\f2dc";
}
.fa-snowman:before {
  content: "\f7d0";
}
.fa-snowplow:before {
  content: "\f7d2";
}
.fa-soap:before {
  content: "\e06e";
}
.fa-socks:before {
  content: "\f696";
}
.fa-solar-panel:before {
  content: "\f5ba";
}
.fa-sort:before,
.fa-unsorted:before {
  content: "\f0dc";
}
.fa-sort-desc:before,
.fa-sort-down:before {
  content: "\f0dd";
}
.fa-sort-asc:before,
.fa-sort-up:before {
  content: "\f0de";
}
.fa-spa:before {
  content: "\f5bb";
}
.fa-pastafarianism:before,
.fa-spaghetti-monster-flying:before {
  content: "\f67b";
}
.fa-spell-check:before {
  content: "\f891";
}
.fa-spider:before {
  content: "\f717";
}
.fa-spinner:before {
  content: "\f110";
}
.fa-splotch:before {
  content: "\f5bc";
}
.fa-spoon:before,
.fa-utensil-spoon:before {
  content: "\f2e5";
}
.fa-spray-can:before {
  content: "\f5bd";
}
.fa-air-freshener:before,
.fa-spray-can-sparkles:before {
  content: "\f5d0";
}
.fa-square:before {
  content: "\f0c8";
}
.fa-external-link-square:before,
.fa-square-arrow-up-right:before {
  content: "\f14c";
}
.fa-caret-square-down:before,
.fa-square-caret-down:before {
  content: "\f150";
}
.fa-caret-square-left:before,
.fa-square-caret-left:before {
  content: "\f191";
}
.fa-caret-square-right:before,
.fa-square-caret-right:before {
  content: "\f152";
}
.fa-caret-square-up:before,
.fa-square-caret-up:before {
  content: "\f151";
}
.fa-check-square:before,
.fa-square-check:before {
  content: "\f14a";
}
.fa-envelope-square:before,
.fa-square-envelope:before {
  content: "\f199";
}
.fa-square-full:before {
  content: "\f45c";
}
.fa-h-square:before,
.fa-square-h:before {
  content: "\f0fd";
}
.fa-minus-square:before,
.fa-square-minus:before {
  content: "\f146";
}
.fa-square-nfi:before {
  content: "\e576";
}
.fa-parking:before,
.fa-square-parking:before {
  content: "\f540";
}
.fa-pen-square:before,
.fa-pencil-square:before,
.fa-square-pen:before {
  content: "\f14b";
}
.fa-square-person-confined:before {
  content: "\e577";
}
.fa-phone-square:before,
.fa-square-phone:before {
  content: "\f098";
}
.fa-phone-square-alt:before,
.fa-square-phone-flip:before {
  content: "\f87b";
}
.fa-plus-square:before,
.fa-square-plus:before {
  content: "\f0fe";
}
.fa-poll-h:before,
.fa-square-poll-horizontal:before {
  content: "\f682";
}
.fa-poll:before,
.fa-square-poll-vertical:before {
  content: "\f681";
}
.fa-square-root-alt:before,
.fa-square-root-variable:before {
  content: "\f698";
}
.fa-rss-square:before,
.fa-square-rss:before {
  content: "\f143";
}
.fa-share-alt-square:before,
.fa-square-share-nodes:before {
  content: "\f1e1";
}
.fa-external-link-square-alt:before,
.fa-square-up-right:before {
  content: "\f360";
}
.fa-square-virus:before {
  content: "\e578";
}
.fa-square-xmark:before,
.fa-times-square:before,
.fa-xmark-square:before {
  content: "\f2d3";
}
.fa-rod-asclepius:before,
.fa-rod-snake:before,
.fa-staff-aesculapius:before,
.fa-staff-snake:before {
  content: "\e579";
}
.fa-stairs:before {
  content: "\e289";
}
.fa-stamp:before {
  content: "\f5bf";
}
.fa-star:before {
  content: "\f005";
}
.fa-star-and-crescent:before {
  content: "\f699";
}
.fa-star-half:before {
  content: "\f089";
}
.fa-star-half-alt:before,
.fa-star-half-stroke:before {
  content: "\f5c0";
}
.fa-star-of-david:before {
  content: "\f69a";
}
.fa-star-of-life:before {
  content: "\f621";
}
.fa-gbp:before,
.fa-pound-sign:before,
.fa-sterling-sign:before {
  content: "\f154";
}
.fa-stethoscope:before {
  content: "\f0f1";
}
.fa-stop:before {
  content: "\f04d";
}
.fa-stopwatch:before {
  content: "\f2f2";
}
.fa-stopwatch-20:before {
  content: "\e06f";
}
.fa-store:before {
  content: "\f54e";
}
.fa-store-slash:before {
  content: "\e071";
}
.fa-street-view:before {
  content: "\f21d";
}
.fa-strikethrough:before {
  content: "\f0cc";
}
.fa-stroopwafel:before {
  content: "\f551";
}
.fa-subscript:before {
  content: "\f12c";
}
.fa-suitcase:before {
  content: "\f0f2";
}
.fa-medkit:before,
.fa-suitcase-medical:before {
  content: "\f0fa";
}
.fa-suitcase-rolling:before {
  content: "\f5c1";
}
.fa-sun:before {
  content: "\f185";
}
.fa-sun-plant-wilt:before {
  content: "\e57a";
}
.fa-superscript:before {
  content: "\f12b";
}
.fa-swatchbook:before {
  content: "\f5c3";
}
.fa-synagogue:before {
  content: "\f69b";
}
.fa-syringe:before {
  content: "\f48e";
}
.fa-t:before {
  content: "\54";
}
.fa-table:before {
  content: "\f0ce";
}
.fa-table-cells:before,
.fa-th:before {
  content: "\f00a";
}
.fa-table-cells-large:before,
.fa-th-large:before {
  content: "\f009";
}
.fa-columns:before,
.fa-table-columns:before {
  content: "\f0db";
}
.fa-table-list:before,
.fa-th-list:before {
  content: "\f00b";
}
.fa-ping-pong-paddle-ball:before,
.fa-table-tennis-paddle-ball:before,
.fa-table-tennis:before {
  content: "\f45d";
}
.fa-tablet-android:before,
.fa-tablet:before {
  content: "\f3fb";
}
.fa-tablet-button:before {
  content: "\f10a";
}
.fa-tablet-alt:before,
.fa-tablet-screen-button:before {
  content: "\f3fa";
}
.fa-tablets:before {
  content: "\f490";
}
.fa-digital-tachograph:before,
.fa-tachograph-digital:before {
  content: "\f566";
}
.fa-tag:before {
  content: "\f02b";
}
.fa-tags:before {
  content: "\f02c";
}
.fa-tape:before {
  content: "\f4db";
}
.fa-tarp:before {
  content: "\e57b";
}
.fa-tarp-droplet:before {
  content: "\e57c";
}
.fa-cab:before,
.fa-taxi:before {
  content: "\f1ba";
}
.fa-teeth:before {
  content: "\f62e";
}
.fa-teeth-open:before {
  content: "\f62f";
}
.fa-temperature-arrow-down:before,
.fa-temperature-down:before {
  content: "\e03f";
}
.fa-temperature-arrow-up:before,
.fa-temperature-up:before {
  content: "\e040";
}
.fa-temperature-0:before,
.fa-temperature-empty:before,
.fa-thermometer-0:before,
.fa-thermometer-empty:before {
  content: "\f2cb";
}
.fa-temperature-4:before,
.fa-temperature-full:before,
.fa-thermometer-4:before,
.fa-thermometer-full:before {
  content: "\f2c7";
}
.fa-temperature-2:before,
.fa-temperature-half:before,
.fa-thermometer-2:before,
.fa-thermometer-half:before {
  content: "\f2c9";
}
.fa-temperature-high:before {
  content: "\f769";
}
.fa-temperature-low:before {
  content: "\f76b";
}
.fa-temperature-1:before,
.fa-temperature-quarter:before,
.fa-thermometer-1:before,
.fa-thermometer-quarter:before {
  content: "\f2ca";
}
.fa-temperature-3:before,
.fa-temperature-three-quarters:before,
.fa-thermometer-3:before,
.fa-thermometer-three-quarters:before {
  content: "\f2c8";
}
.fa-tenge-sign:before,
.fa-tenge:before {
  content: "\f7d7";
}
.fa-tent:before {
  content: "\e57d";
}
.fa-tent-arrow-down-to-line:before {
  content: "\e57e";
}
.fa-tent-arrow-left-right:before {
  content: "\e57f";
}
.fa-tent-arrow-turn-left:before {
  content: "\e580";
}
.fa-tent-arrows-down:before {
  content: "\e581";
}
.fa-tents:before {
  content: "\e582";
}
.fa-terminal:before {
  content: "\f120";
}
.fa-text-height:before {
  content: "\f034";
}
.fa-remove-format:before,
.fa-text-slash:before {
  content: "\f87d";
}
.fa-text-width:before {
  content: "\f035";
}
.fa-thermometer:before {
  content: "\f491";
}
.fa-thumbs-down:before {
  content: "\f165";
}
.fa-thumbs-up:before {
  content: "\f164";
}
.fa-thumb-tack:before,
.fa-thumbtack:before {
  content: "\f08d";
}
.fa-ticket:before {
  content: "\f145";
}
.fa-ticket-alt:before,
.fa-ticket-simple:before {
  content: "\f3ff";
}
.fa-timeline:before {
  content: "\e29c";
}
.fa-toggle-off:before {
  content: "\f204";
}
.fa-toggle-on:before {
  content: "\f205";
}
.fa-toilet:before {
  content: "\f7d8";
}
.fa-toilet-paper:before {
  content: "\f71e";
}
.fa-toilet-paper-slash:before {
  content: "\e072";
}
.fa-toilet-portable:before {
  content: "\e583";
}
.fa-toilets-portable:before {
  content: "\e584";
}
.fa-toolbox:before {
  content: "\f552";
}
.fa-tooth:before {
  content: "\f5c9";
}
.fa-torii-gate:before {
  content: "\f6a1";
}
.fa-tornado:before {
  content: "\f76f";
}
.fa-broadcast-tower:before,
.fa-tower-broadcast:before {
  content: "\f519";
}
.fa-tower-cell:before {
  content: "\e585";
}
.fa-tower-observation:before {
  content: "\e586";
}
.fa-tractor:before {
  content: "\f722";
}
.fa-trademark:before {
  content: "\f25c";
}
.fa-traffic-light:before {
  content: "\f637";
}
.fa-trailer:before {
  content: "\e041";
}
.fa-train:before {
  content: "\f238";
}
.fa-subway:before,
.fa-train-subway:before {
  content: "\f239";
}
.fa-train-tram:before,
.fa-tram:before {
  content: "\f7da";
}
.fa-transgender-alt:before,
.fa-transgender:before {
  content: "\f225";
}
.fa-trash:before {
  content: "\f1f8";
}
.fa-trash-arrow-up:before,
.fa-trash-restore:before {
  content: "\f829";
}
.fa-trash-alt:before,
.fa-trash-can:before {
  content: "\f2ed";
}
.fa-trash-can-arrow-up:before,
.fa-trash-restore-alt:before {
  content: "\f82a";
}
.fa-tree:before {
  content: "\f1bb";
}
.fa-tree-city:before {
  content: "\e587";
}
.fa-exclamation-triangle:before,
.fa-triangle-exclamation:before,
.fa-warning:before {
  content: "\f071";
}
.fa-trophy:before {
  content: "\f091";
}
.fa-trowel:before {
  content: "\e589";
}
.fa-trowel-bricks:before {
  content: "\e58a";
}
.fa-truck:before {
  content: "\f0d1";
}
.fa-truck-arrow-right:before {
  content: "\e58b";
}
.fa-truck-droplet:before {
  content: "\e58c";
}
.fa-shipping-fast:before,
.fa-truck-fast:before {
  content: "\f48b";
}
.fa-truck-field:before {
  content: "\e58d";
}
.fa-truck-field-un:before {
  content: "\e58e";
}
.fa-truck-front:before {
  content: "\e2b7";
}
.fa-ambulance:before,
.fa-truck-medical:before {
  content: "\f0f9";
}
.fa-truck-monster:before {
  content: "\f63b";
}
.fa-truck-moving:before {
  content: "\f4df";
}
.fa-truck-pickup:before {
  content: "\f63c";
}
.fa-truck-plane:before {
  content: "\e58f";
}
.fa-truck-loading:before,
.fa-truck-ramp-box:before {
  content: "\f4de";
}
.fa-teletype:before,
.fa-tty:before {
  content: "\f1e4";
}
.fa-try:before,
.fa-turkish-lira-sign:before,
.fa-turkish-lira:before {
  content: "\e2bb";
}
.fa-level-down-alt:before,
.fa-turn-down:before {
  content: "\f3be";
}
.fa-level-up-alt:before,
.fa-turn-up:before {
  content: "\f3bf";
}
.fa-television:before,
.fa-tv-alt:before,
.fa-tv:before {
  content: "\f26c";
}
.fa-u:before {
  content: "\55";
}
.fa-umbrella:before {
  content: "\f0e9";
}
.fa-umbrella-beach:before {
  content: "\f5ca";
}
.fa-underline:before {
  content: "\f0cd";
}
.fa-universal-access:before {
  content: "\f29a";
}
.fa-unlock:before {
  content: "\f09c";
}
.fa-unlock-alt:before,
.fa-unlock-keyhole:before {
  content: "\f13e";
}
.fa-arrows-alt-v:before,
.fa-up-down:before {
  content: "\f338";
}
.fa-arrows-alt:before,
.fa-up-down-left-right:before {
  content: "\f0b2";
}
.fa-long-arrow-alt-up:before,
.fa-up-long:before {
  content: "\f30c";
}
.fa-expand-alt:before,
.fa-up-right-and-down-left-from-center:before {
  content: "\f424";
}
.fa-external-link-alt:before,
.fa-up-right-from-square:before {
  content: "\f35d";
}
.fa-upload:before {
  content: "\f093";
}
.fa-user:before {
  content: "\f007";
}
.fa-user-astronaut:before {
  content: "\f4fb";
}
.fa-user-check:before {
  content: "\f4fc";
}
.fa-user-clock:before {
  content: "\f4fd";
}
.fa-user-doctor:before,
.fa-user-md:before {
  content: "\f0f0";
}
.fa-user-cog:before,
.fa-user-gear:before {
  content: "\f4fe";
}
.fa-user-graduate:before {
  content: "\f501";
}
.fa-user-friends:before,
.fa-user-group:before {
  content: "\f500";
}
.fa-user-injured:before {
  content: "\f728";
}
.fa-user-alt:before,
.fa-user-large:before {
  content: "\f406";
}
.fa-user-alt-slash:before,
.fa-user-large-slash:before {
  content: "\f4fa";
}
.fa-user-lock:before {
  content: "\f502";
}
.fa-user-minus:before {
  content: "\f503";
}
.fa-user-ninja:before {
  content: "\f504";
}
.fa-user-nurse:before {
  content: "\f82f";
}
.fa-user-edit:before,
.fa-user-pen:before {
  content: "\f4ff";
}
.fa-user-plus:before {
  content: "\f234";
}
.fa-user-secret:before {
  content: "\f21b";
}
.fa-user-shield:before {
  content: "\f505";
}
.fa-user-slash:before {
  content: "\f506";
}
.fa-user-tag:before {
  content: "\f507";
}
.fa-user-tie:before {
  content: "\f508";
}
.fa-user-times:before,
.fa-user-xmark:before {
  content: "\f235";
}
.fa-users:before {
  content: "\f0c0";
}
.fa-users-between-lines:before {
  content: "\e591";
}
.fa-users-cog:before,
.fa-users-gear:before {
  content: "\f509";
}
.fa-users-line:before {
  content: "\e592";
}
.fa-users-rays:before {
  content: "\e593";
}
.fa-users-rectangle:before {
  content: "\e594";
}
.fa-users-slash:before {
  content: "\e073";
}
.fa-users-viewfinder:before {
  content: "\e595";
}
.fa-cutlery:before,
.fa-utensils:before {
  content: "\f2e7";
}
.fa-v:before {
  content: "\56";
}
.fa-shuttle-van:before,
.fa-van-shuttle:before {
  content: "\f5b6";
}
.fa-vault:before {
  content: "\e2c5";
}
.fa-vector-square:before {
  content: "\f5cb";
}
.fa-venus:before {
  content: "\f221";
}
.fa-venus-double:before {
  content: "\f226";
}
.fa-venus-mars:before {
  content: "\f228";
}
.fa-vest:before {
  content: "\e085";
}
.fa-vest-patches:before {
  content: "\e086";
}
.fa-vial:before {
  content: "\f492";
}
.fa-vial-circle-check:before {
  content: "\e596";
}
.fa-vial-virus:before {
  content: "\e597";
}
.fa-vials:before {
  content: "\f493";
}
.fa-video-camera:before,
.fa-video:before {
  content: "\f03d";
}
.fa-video-slash:before {
  content: "\f4e2";
}
.fa-vihara:before {
  content: "\f6a7";
}
.fa-virus:before {
  content: "\e074";
}
.fa-virus-covid:before {
  content: "\e4a8";
}
.fa-virus-covid-slash:before {
  content: "\e4a9";
}
.fa-virus-slash:before {
  content: "\e075";
}
.fa-viruses:before {
  content: "\e076";
}
.fa-voicemail:before {
  content: "\f897";
}
.fa-volcano:before {
  content: "\f770";
}
.fa-volleyball-ball:before,
.fa-volleyball:before {
  content: "\f45f";
}
.fa-volume-high:before,
.fa-volume-up:before {
  content: "\f028";
}
.fa-volume-down:before,
.fa-volume-low:before {
  content: "\f027";
}
.fa-volume-off:before {
  content: "\f026";
}
.fa-volume-mute:before,
.fa-volume-times:before,
.fa-volume-xmark:before {
  content: "\f6a9";
}
.fa-vr-cardboard:before {
  content: "\f729";
}
.fa-w:before {
  content: "\57";
}
.fa-walkie-talkie:before {
  content: "\f8ef";
}
.fa-wallet:before {
  content: "\f555";
}
.fa-magic:before,
.fa-wand-magic:before {
  content: "\f0d0";
}
.fa-magic-wand-sparkles:before,
.fa-wand-magic-sparkles:before {
  content: "\e2ca";
}
.fa-wand-sparkles:before {
  content: "\f72b";
}
.fa-warehouse:before {
  content: "\f494";
}
.fa-water:before {
  content: "\f773";
}
.fa-ladder-water:before,
.fa-swimming-pool:before,
.fa-water-ladder:before {
  content: "\f5c5";
}
.fa-wave-square:before {
  content: "\f83e";
}
.fa-weight-hanging:before {
  content: "\f5cd";
}
.fa-weight-scale:before,
.fa-weight:before {
  content: "\f496";
}
.fa-wheat-alt:before,
.fa-wheat-awn:before {
  content: "\e2cd";
}
.fa-wheat-awn-circle-exclamation:before {
  content: "\e598";
}
.fa-wheelchair:before {
  content: "\f193";
}
.fa-wheelchair-alt:before,
.fa-wheelchair-move:before {
  content: "\e2ce";
}
.fa-glass-whiskey:before,
.fa-whiskey-glass:before {
  content: "\f7a0";
}
.fa-wifi-3:before,
.fa-wifi-strong:before,
.fa-wifi:before {
  content: "\f1eb";
}
.fa-wind:before {
  content: "\f72e";
}
.fa-window-maximize:before {
  content: "\f2d0";
}
.fa-window-minimize:before {
  content: "\f2d1";
}
.fa-window-restore:before {
  content: "\f2d2";
}
.fa-wine-bottle:before {
  content: "\f72f";
}
.fa-wine-glass:before {
  content: "\f4e3";
}
.fa-wine-glass-alt:before,
.fa-wine-glass-empty:before {
  content: "\f5ce";
}
.fa-krw:before,
.fa-won-sign:before,
.fa-won:before {
  content: "\f159";
}
.fa-worm:before {
  content: "\e599";
}
.fa-wrench:before {
  content: "\f0ad";
}
.fa-x:before {
  content: "\58";
}
.fa-x-ray:before {
  content: "\f497";
}
.fa-close:before,
.fa-multiply:before,
.fa-remove:before,
.fa-times:before,
.fa-xmark:before {
  content: "\f00d";
}
.fa-xmarks-lines:before {
  content: "\e59a";
}
.fa-y:before {
  content: "\59";
}
.fa-cny:before,
.fa-jpy:before,
.fa-rmb:before,
.fa-yen-sign:before,
.fa-yen:before {
  content: "\f157";
}
.fa-yin-yang:before {
  content: "\f6ad";
}
.fa-z:before {
  content: "\5a";
}
.fa-sr-only,
.fa-sr-only-focusable:not(:focus),
.sr-only,
.sr-only-focusable:not(:focus) {
  position: absolute;
  width: 1px;
  height: 1px;
  padding: 0;
  margin: -1px;
  overflow: hidden;
  clip: rect(0, 0, 0, 0);
  white-space: nowrap;
  border-width: 0;
}
:host,
:root {
  --fa-font-brands: normal 400 1em/1 "Font Awesome 6 Brands";
}
@font-face {
  font-family: "Font Awesome 6 Brands";
  font-style: normal;
  font-weight: 400;
  font-display: block;
  src: url(https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/webfonts/fa-brands-400.woff2)
      format("woff2"),
    url(https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/webfonts/fa-brands-400.ttf)
      format("truetype");
}
.fa-brands,
.fab {
  font-family: "Font Awesome 6 Brands";
  font-weight: 400;
}
.fa-42-group:before,
.fa-innosoft:before {
  content: "\e080";
}
.fa-500px:before {
  content: "\f26e";
}
.fa-accessible-icon:before {
  content: "\f368";
}
.fa-accusoft:before {
  content: "\f369";
}
.fa-adn:before {
  content: "\f170";
}
.fa-adversal:before {
  content: "\f36a";
}
.fa-affiliatetheme:before {
  content: "\f36b";
}
.fa-airbnb:before {
  content: "\f834";
}
.fa-algolia:before {
  content: "\f36c";
}
.fa-alipay:before {
  content: "\f642";
}
.fa-amazon:before {
  content: "\f270";
}
.fa-amazon-pay:before {
  content: "\f42c";
}
.fa-amilia:before {
  content: "\f36d";
}
.fa-android:before {
  content: "\f17b";
}
.fa-angellist:before {
  content: "\f209";
}
.fa-angrycreative:before {
  content: "\f36e";
}
.fa-angular:before {
  content: "\f420";
}
.fa-app-store:before {
  content: "\f36f";
}
.fa-app-store-ios:before {
  content: "\f370";
}
.fa-apper:before {
  content: "\f371";
}
.fa-apple:before {
  content: "\f179";
}
.fa-apple-pay:before {
  content: "\f415";
}
.fa-artstation:before {
  content: "\f77a";
}
.fa-asymmetrik:before {
  content: "\f372";
}
.fa-atlassian:before {
  content: "\f77b";
}
.fa-audible:before {
  content: "\f373";
}
.fa-autoprefixer:before {
  content: "\f41c";
}
.fa-avianex:before {
  content: "\f374";
}
.fa-aviato:before {
  content: "\f421";
}
.fa-aws:before {
  content: "\f375";
}
.fa-bandcamp:before {
  content: "\f2d5";
}
.fa-battle-net:before {
  content: "\f835";
}
.fa-behance:before {
  content: "\f1b4";
}
.fa-behance-square:before {
  content: "\f1b5";
}
.fa-bilibili:before {
  content: "\e3d9";
}
.fa-bimobject:before {
  content: "\f378";
}
.fa-bitbucket:before {
  content: "\f171";
}
.fa-bitcoin:before {
  content: "\f379";
}
.fa-bity:before {
  content: "\f37a";
}
.fa-black-tie:before {
  content: "\f27e";
}
.fa-blackberry:before {
  content: "\f37b";
}
.fa-blogger:before {
  content: "\f37c";
}
.fa-blogger-b:before {
  content: "\f37d";
}
.fa-bluetooth:before {
  content: "\f293";
}
.fa-bluetooth-b:before {
  content: "\f294";
}
.fa-bootstrap:before {
  content: "\f836";
}
.fa-bots:before {
  content: "\e340";
}
.fa-btc:before {
  content: "\f15a";
}
.fa-buffer:before {
  content: "\f837";
}
.fa-buromobelexperte:before {
  content: "\f37f";
}
.fa-buy-n-large:before {
  content: "\f8a6";
}
.fa-buysellads:before {
  content: "\f20d";
}
.fa-canadian-maple-leaf:before {
  content: "\f785";
}
.fa-cc-amazon-pay:before {
  content: "\f42d";
}
.fa-cc-amex:before {
  content: "\f1f3";
}
.fa-cc-apple-pay:before {
  content: "\f416";
}
.fa-cc-diners-club:before {
  content: "\f24c";
}
.fa-cc-discover:before {
  content: "\f1f2";
}
.fa-cc-jcb:before {
  content: "\f24b";
}
.fa-cc-mastercard:before {
  content: "\f1f1";
}
.fa-cc-paypal:before {
  content: "\f1f4";
}
.fa-cc-stripe:before {
  content: "\f1f5";
}
.fa-cc-visa:before {
  content: "\f1f0";
}
.fa-centercode:before {
  content: "\f380";
}
.fa-centos:before {
  content: "\f789";
}
.fa-chrome:before {
  content: "\f268";
}
.fa-chromecast:before {
  content: "\f838";
}
.fa-cloudflare:before {
  content: "\e07d";
}
.fa-cloudscale:before {
  content: "\f383";
}
.fa-cloudsmith:before {
  content: "\f384";
}
.fa-cloudversify:before {
  content: "\f385";
}
.fa-cmplid:before {
  content: "\e360";
}
.fa-codepen:before {
  content: "\f1cb";
}
.fa-codiepie:before {
  content: "\f284";
}
.fa-confluence:before {
  content: "\f78d";
}
.fa-connectdevelop:before {
  content: "\f20e";
}
.fa-contao:before {
  content: "\f26d";
}
.fa-cotton-bureau:before {
  content: "\f89e";
}
.fa-cpanel:before {
  content: "\f388";
}
.fa-creative-commons:before {
  content: "\f25e";
}
.fa-creative-commons-by:before {
  content: "\f4e7";
}
.fa-creative-commons-nc:before {
  content: "\f4e8";
}
.fa-creative-commons-nc-eu:before {
  content: "\f4e9";
}
.fa-creative-commons-nc-jp:before {
  content: "\f4ea";
}
.fa-creative-commons-nd:before {
  content: "\f4eb";
}
.fa-creative-commons-pd:before {
  content: "\f4ec";
}
.fa-creative-commons-pd-alt:before {
  content: "\f4ed";
}
.fa-creative-commons-remix:before {
  content: "\f4ee";
}
.fa-creative-commons-sa:before {
  content: "\f4ef";
}
.fa-creative-commons-sampling:before {
  content: "\f4f0";
}
.fa-creative-commons-sampling-plus:before {
  content: "\f4f1";
}
.fa-creative-commons-share:before {
  content: "\f4f2";
}
.fa-creative-commons-zero:before {
  content: "\f4f3";
}
.fa-critical-role:before {
  content: "\f6c9";
}
.fa-css3:before {
  content: "\f13c";
}
.fa-css3-alt:before {
  content: "\f38b";
}
.fa-cuttlefish:before {
  content: "\f38c";
}
.fa-d-and-d:before {
  content: "\f38d";
}
.fa-d-and-d-beyond:before {
  content: "\f6ca";
}
.fa-dailymotion:before {
  content: "\e052";
}
.fa-dashcube:before {
  content: "\f210";
}
.fa-deezer:before {
  content: "\e077";
}
.fa-delicious:before {
  content: "\f1a5";
}
.fa-deploydog:before {
  content: "\f38e";
}
.fa-deskpro:before {
  content: "\f38f";
}
.fa-dev:before {
  content: "\f6cc";
}
.fa-deviantart:before {
  content: "\f1bd";
}
.fa-dhl:before {
  content: "\f790";
}
.fa-diaspora:before {
  content: "\f791";
}
.fa-digg:before {
  content: "\f1a6";
}
.fa-digital-ocean:before {
  content: "\f391";
}
.fa-discord:before {
  content: "\f392";
}
.fa-discourse:before {
  content: "\f393";
}
.fa-dochub:before {
  content: "\f394";
}
.fa-docker:before {
  content: "\f395";
}
.fa-draft2digital:before {
  content: "\f396";
}
.fa-dribbble:before {
  content: "\f17d";
}
.fa-dribbble-square:before {
  content: "\f397";
}
.fa-dropbox:before {
  content: "\f16b";
}
.fa-drupal:before {
  content: "\f1a9";
}
.fa-dyalog:before {
  content: "\f399";
}
.fa-earlybirds:before {
  content: "\f39a";
}
.fa-ebay:before {
  content: "\f4f4";
}
.fa-edge:before {
  content: "\f282";
}
.fa-edge-legacy:before {
  content: "\e078";
}
.fa-elementor:before {
  content: "\f430";
}
.fa-ello:before {
  content: "\f5f1";
}
.fa-ember:before {
  content: "\f423";
}
.fa-empire:before {
  content: "\f1d1";
}
.fa-envira:before {
  content: "\f299";
}
.fa-erlang:before {
  content: "\f39d";
}
.fa-ethereum:before {
  content: "\f42e";
}
.fa-etsy:before {
  content: "\f2d7";
}
.fa-evernote:before {
  content: "\f839";
}
.fa-expeditedssl:before {
  content: "\f23e";
}
.fa-facebook:before {
  content: "\f09a";
}
.fa-facebook-f:before {
  content: "\f39e";
}
.fa-facebook-messenger:before {
  content: "\f39f";
}
.fa-facebook-square:before {
  content: "\f082";
}
.fa-fantasy-flight-games:before {
  content: "\f6dc";
}
.fa-fedex:before {
  content: "\f797";
}
.fa-fedora:before {
  content: "\f798";
}
.fa-figma:before {
  content: "\f799";
}
.fa-firefox:before {
  content: "\f269";
}
.fa-firefox-browser:before {
  content: "\e007";
}
.fa-first-order:before {
  content: "\f2b0";
}
.fa-first-order-alt:before {
  content: "\f50a";
}
.fa-firstdraft:before {
  content: "\f3a1";
}
.fa-flickr:before {
  content: "\f16e";
}
.fa-flipboard:before {
  content: "\f44d";
}
.fa-fly:before {
  content: "\f417";
}
.fa-font-awesome-flag:before,
.fa-font-awesome-logo-full:before,
.fa-font-awesome:before {
  content: "\f2b4";
}
.fa-fonticons:before {
  content: "\f280";
}
.fa-fonticons-fi:before {
  content: "\f3a2";
}
.fa-fort-awesome:before {
  content: "\f286";
}
.fa-fort-awesome-alt:before {
  content: "\f3a3";
}
.fa-forumbee:before {
  content: "\f211";
}
.fa-foursquare:before {
  content: "\f180";
}
.fa-free-code-camp:before {
  content: "\f2c5";
}
.fa-freebsd:before {
  content: "\f3a4";
}
.fa-fulcrum:before {
  content: "\f50b";
}
.fa-galactic-republic:before {
  content: "\f50c";
}
.fa-galactic-senate:before {
  content: "\f50d";
}
.fa-get-pocket:before {
  content: "\f265";
}
.fa-gg:before {
  content: "\f260";
}
.fa-gg-circle:before {
  content: "\f261";
}
.fa-git:before {
  content: "\f1d3";
}
.fa-git-alt:before {
  content: "\f841";
}
.fa-git-square:before {
  content: "\f1d2";
}
.fa-github:before {
  content: "\f09b";
}
.fa-github-alt:before {
  content: "\f113";
}
.fa-github-square:before {
  content: "\f092";
}
.fa-gitkraken:before {
  content: "\f3a6";
}
.fa-gitlab:before {
  content: "\f296";
}
.fa-gitter:before {
  content: "\f426";
}
.fa-glide:before {
  content: "\f2a5";
}
.fa-glide-g:before {
  content: "\f2a6";
}
.fa-gofore:before {
  content: "\f3a7";
}
.fa-golang:before {
  content: "\e40f";
}
.fa-goodreads:before {
  content: "\f3a8";
}
.fa-goodreads-g:before {
  content: "\f3a9";
}
.fa-google:before {
  content: "\f1a0";
}
.fa-google-drive:before {
  content: "\f3aa";
}
.fa-google-pay:before {
  content: "\e079";
}
.fa-google-play:before {
  content: "\f3ab";
}
.fa-google-plus:before {
  content: "\f2b3";
}
.fa-google-plus-g:before {
  content: "\f0d5";
}
.fa-google-plus-square:before {
  content: "\f0d4";
}
.fa-google-wallet:before {
  content: "\f1ee";
}
.fa-gratipay:before {
  content: "\f184";
}
.fa-grav:before {
  content: "\f2d6";
}
.fa-gripfire:before {
  content: "\f3ac";
}
.fa-grunt:before {
  content: "\f3ad";
}
.fa-guilded:before {
  content: "\e07e";
}
.fa-gulp:before {
  content: "\f3ae";
}
.fa-hacker-news:before {
  content: "\f1d4";
}
.fa-hacker-news-square:before {
  content: "\f3af";
}
.fa-hackerrank:before {
  content: "\f5f7";
}
.fa-hashnode:before {
  content: "\e499";
}
.fa-hips:before {
  content: "\f452";
}
.fa-hire-a-helper:before {
  content: "\f3b0";
}
.fa-hive:before {
  content: "\e07f";
}
.fa-hooli:before {
  content: "\f427";
}
.fa-hornbill:before {
  content: "\f592";
}
.fa-hotjar:before {
  content: "\f3b1";
}
.fa-houzz:before {
  content: "\f27c";
}
.fa-html5:before {
  content: "\f13b";
}
.fa-hubspot:before {
  content: "\f3b2";
}
.fa-ideal:before {
  content: "\e013";
}
.fa-imdb:before {
  content: "\f2d8";
}
.fa-instagram:before {
  content: "\f16d";
}
.fa-instagram-square:before {
  content: "\e055";
}
.fa-instalod:before {
  content: "\e081";
}
.fa-intercom:before {
  content: "\f7af";
}
.fa-internet-explorer:before {
  content: "\f26b";
}
.fa-invision:before {
  content: "\f7b0";
}
.fa-ioxhost:before {
  content: "\f208";
}
.fa-itch-io:before {
  content: "\f83a";
}
.fa-itunes:before {
  content: "\f3b4";
}
.fa-itunes-note:before {
  content: "\f3b5";
}
.fa-java:before {
  content: "\f4e4";
}
.fa-jedi-order:before {
  content: "\f50e";
}
.fa-jenkins:before {
  content: "\f3b6";
}
.fa-jira:before {
  content: "\f7b1";
}
.fa-joget:before {
  content: "\f3b7";
}
.fa-joomla:before {
  content: "\f1aa";
}
.fa-js:before {
  content: "\f3b8";
}
.fa-js-square:before {
  content: "\f3b9";
}
.fa-jsfiddle:before {
  content: "\f1cc";
}
.fa-kaggle:before {
  content: "\f5fa";
}
.fa-keybase:before {
  content: "\f4f5";
}
.fa-keycdn:before {
  content: "\f3ba";
}
.fa-kickstarter:before {
  content: "\f3bb";
}
.fa-kickstarter-k:before {
  content: "\f3bc";
}
.fa-korvue:before {
  content: "\f42f";
}
.fa-laravel:before {
  content: "\f3bd";
}
.fa-lastfm:before {
  content: "\f202";
}
.fa-lastfm-square:before {
  content: "\f203";
}
.fa-leanpub:before {
  content: "\f212";
}
.fa-less:before {
  content: "\f41d";
}
.fa-line:before {
  content: "\f3c0";
}
.fa-linkedin:before {
  content: "\f08c";
}
.fa-linkedin-in:before {
  content: "\f0e1";
}
.fa-linode:before {
  content: "\f2b8";
}
.fa-linux:before {
  content: "\f17c";
}
.fa-lyft:before {
  content: "\f3c3";
}
.fa-magento:before {
  content: "\f3c4";
}
.fa-mailchimp:before {
  content: "\f59e";
}
.fa-mandalorian:before {
  content: "\f50f";
}
.fa-markdown:before {
  content: "\f60f";
}
.fa-mastodon:before {
  content: "\f4f6";
}
.fa-maxcdn:before {
  content: "\f136";
}
.fa-mdb:before {
  content: "\f8ca";
}
.fa-medapps:before {
  content: "\f3c6";
}
.fa-medium-m:before,
.fa-medium:before {
  content: "\f23a";
}
.fa-medrt:before {
  content: "\f3c8";
}
.fa-meetup:before {
  content: "\f2e0";
}
.fa-megaport:before {
  content: "\f5a3";
}
.fa-mendeley:before {
  content: "\f7b3";
}
.fa-microblog:before {
  content: "\e01a";
}
.fa-microsoft:before {
  content: "\f3ca";
}
.fa-mix:before {
  content: "\f3cb";
}
.fa-mixcloud:before {
  content: "\f289";
}
.fa-mixer:before {
  content: "\e056";
}
.fa-mizuni:before {
  content: "\f3cc";
}
.fa-modx:before {
  content: "\f285";
}
.fa-monero:before {
  content: "\f3d0";
}
.fa-napster:before {
  content: "\f3d2";
}
.fa-neos:before {
  content: "\f612";
}
.fa-nfc-directional:before {
  content: "\e530";
}
.fa-nfc-symbol:before {
  content: "\e531";
}
.fa-nimblr:before {
  content: "\f5a8";
}
.fa-node:before {
  content: "\f419";
}
.fa-node-js:before {
  content: "\f3d3";
}
.fa-npm:before {
  content: "\f3d4";
}
.fa-ns8:before {
  content: "\f3d5";
}
.fa-nutritionix:before {
  content: "\f3d6";
}
.fa-octopus-deploy:before {
  content: "\e082";
}
.fa-odnoklassniki:before {
  content: "\f263";
}
.fa-odnoklassniki-square:before {
  content: "\f264";
}
.fa-old-republic:before {
  content: "\f510";
}
.fa-opencart:before {
  content: "\f23d";
}
.fa-openid:before {
  content: "\f19b";
}
.fa-opera:before {
  content: "\f26a";
}
.fa-optin-monster:before {
  content: "\f23c";
}
.fa-orcid:before {
  content: "\f8d2";
}
.fa-osi:before {
  content: "\f41a";
}
.fa-padlet:before {
  content: "\e4a0";
}
.fa-page4:before {
  content: "\f3d7";
}
.fa-pagelines:before {
  content: "\f18c";
}
.fa-palfed:before {
  content: "\f3d8";
}
.fa-patreon:before {
  content: "\f3d9";
}
.fa-paypal:before {
  content: "\f1ed";
}
.fa-perbyte:before {
  content: "\e083";
}
.fa-periscope:before {
  content: "\f3da";
}
.fa-phabricator:before {
  content: "\f3db";
}
.fa-phoenix-framework:before {
  content: "\f3dc";
}
.fa-phoenix-squadron:before {
  content: "\f511";
}
.fa-php:before {
  content: "\f457";
}
.fa-pied-piper:before {
  content: "\f2ae";
}
.fa-pied-piper-alt:before {
  content: "\f1a8";
}
.fa-pied-piper-hat:before {
  content: "\f4e5";
}
.fa-pied-piper-pp:before {
  content: "\f1a7";
}
.fa-pied-piper-square:before {
  content: "\e01e";
}
.fa-pinterest:before {
  content: "\f0d2";
}
.fa-pinterest-p:before {
  content: "\f231";
}
.fa-pinterest-square:before {
  content: "\f0d3";
}
.fa-pix:before {
  content: "\e43a";
}
.fa-playstation:before {
  content: "\f3df";
}
.fa-product-hunt:before {
  content: "\f288";
}
.fa-pushed:before {
  content: "\f3e1";
}
.fa-python:before {
  content: "\f3e2";
}
.fa-qq:before {
  content: "\f1d6";
}
.fa-quinscape:before {
  content: "\f459";
}
.fa-quora:before {
  content: "\f2c4";
}
.fa-r-project:before {
  content: "\f4f7";
}
.fa-raspberry-pi:before {
  content: "\f7bb";
}
.fa-ravelry:before {
  content: "\f2d9";
}
.fa-react:before {
  content: "\f41b";
}
.fa-reacteurope:before {
  content: "\f75d";
}
.fa-readme:before {
  content: "\f4d5";
}
.fa-rebel:before {
  content: "\f1d0";
}
.fa-red-river:before {
  content: "\f3e3";
}
.fa-reddit:before {
  content: "\f1a1";
}
.fa-reddit-alien:before {
  content: "\f281";
}
.fa-reddit-square:before {
  content: "\f1a2";
}
.fa-redhat:before {
  content: "\f7bc";
}
.fa-renren:before {
  content: "\f18b";
}
.fa-replyd:before {
  content: "\f3e6";
}
.fa-researchgate:before {
  content: "\f4f8";
}
.fa-resolving:before {
  content: "\f3e7";
}
.fa-rev:before {
  content: "\f5b2";
}
.fa-rocketchat:before {
  content: "\f3e8";
}
.fa-rockrms:before {
  content: "\f3e9";
}
.fa-rust:before {
  content: "\e07a";
}
.fa-safari:before {
  content: "\f267";
}
.fa-salesforce:before {
  content: "\f83b";
}
.fa-sass:before {
  content: "\f41e";
}
.fa-schlix:before {
  content: "\f3ea";
}
.fa-screenpal:before {
  content: "\e570";
}
.fa-scribd:before {
  content: "\f28a";
}
.fa-searchengin:before {
  content: "\f3eb";
}
.fa-sellcast:before {
  content: "\f2da";
}
.fa-sellsy:before {
  content: "\f213";
}
.fa-servicestack:before {
  content: "\f3ec";
}
.fa-shirtsinbulk:before {
  content: "\f214";
}
.fa-shopify:before {
  content: "\e057";
}
.fa-shopware:before {
  content: "\f5b5";
}
.fa-simplybuilt:before {
  content: "\f215";
}
.fa-sistrix:before {
  content: "\f3ee";
}
.fa-sith:before {
  content: "\f512";
}
.fa-sitrox:before {
  content: "\e44a";
}
.fa-sketch:before {
  content: "\f7c6";
}
.fa-skyatlas:before {
  content: "\f216";
}
.fa-skype:before {
  content: "\f17e";
}
.fa-slack-hash:before,
.fa-slack:before {
  content: "\f198";
}
.fa-slideshare:before {
  content: "\f1e7";
}
.fa-snapchat-ghost:before,
.fa-snapchat:before {
  content: "\f2ab";
}
.fa-snapchat-square:before {
  content: "\f2ad";
}
.fa-soundcloud:before {
  content: "\f1be";
}
.fa-sourcetree:before {
  content: "\f7d3";
}
.fa-speakap:before {
  content: "\f3f3";
}
.fa-speaker-deck:before {
  content: "\f83c";
}
.fa-spotify:before {
  content: "\f1bc";
}
.fa-square-font-awesome:before {
  content: "\f425";
}
.fa-font-awesome-alt:before,
.fa-square-font-awesome-stroke:before {
  content: "\f35c";
}
.fa-squarespace:before {
  content: "\f5be";
}
.fa-stack-exchange:before {
  content: "\f18d";
}
.fa-stack-overflow:before {
  content: "\f16c";
}
.fa-stackpath:before {
  content: "\f842";
}
.fa-staylinked:before {
  content: "\f3f5";
}
.fa-steam:before {
  content: "\f1b6";
}
.fa-steam-square:before {
  content: "\f1b7";
}
.fa-steam-symbol:before {
  content: "\f3f6";
}
.fa-sticker-mule:before {
  content: "\f3f7";
}
.fa-strava:before {
  content: "\f428";
}
.fa-stripe:before {
  content: "\f429";
}
.fa-stripe-s:before {
  content: "\f42a";
}
.fa-studiovinari:before {
  content: "\f3f8";
}
.fa-stumbleupon:before {
  content: "\f1a4";
}
.fa-stumbleupon-circle:before {
  content: "\f1a3";
}
.fa-superpowers:before {
  content: "\f2dd";
}
.fa-supple:before {
  content: "\f3f9";
}
.fa-suse:before {
  content: "\f7d6";
}
.fa-swift:before {
  content: "\f8e1";
}
.fa-symfony:before {
  content: "\f83d";
}
.fa-teamspeak:before {
  content: "\f4f9";
}
.fa-telegram-plane:before,
.fa-telegram:before {
  content: "\f2c6";
}
.fa-tencent-weibo:before {
  content: "\f1d5";
}
.fa-the-red-yeti:before {
  content: "\f69d";
}
.fa-themeco:before {
  content: "\f5c6";
}
.fa-themeisle:before {
  content: "\f2b2";
}
.fa-think-peaks:before {
  content: "\f731";
}
.fa-tiktok:before {
  content: "\e07b";
}
.fa-trade-federation:before {
  content: "\f513";
}
.fa-trello:before {
  content: "\f181";
}
.fa-tumblr:before {
  content: "\f173";
}
.fa-tumblr-square:before {
  content: "\f174";
}
.fa-twitch:before {
  content: "\f1e8";
}
.fa-twitter:before {
  content: "\f099";
}
.fa-twitter-square:before {
  content: "\f081";
}
.fa-typo3:before {
  content: "\f42b";
}
.fa-uber:before {
  content: "\f402";
}
.fa-ubuntu:before {
  content: "\f7df";
}
.fa-uikit:before {
  content: "\f403";
}
.fa-umbraco:before {
  content: "\f8e8";
}
.fa-uncharted:before {
  content: "\e084";
}
.fa-uniregistry:before {
  content: "\f404";
}
.fa-unity:before {
  content: "\e049";
}
.fa-unsplash:before {
  content: "\e07c";
}
.fa-untappd:before {
  content: "\f405";
}
.fa-ups:before {
  content: "\f7e0";
}
.fa-usb:before {
  content: "\f287";
}
.fa-usps:before {
  content: "\f7e1";
}
.fa-ussunnah:before {
  content: "\f407";
}
.fa-vaadin:before {
  content: "\f408";
}
.fa-viacoin:before {
  content: "\f237";
}
.fa-viadeo:before {
  content: "\f2a9";
}
.fa-viadeo-square:before {
  content: "\f2aa";
}
.fa-viber:before {
  content: "\f409";
}
.fa-vimeo:before {
  content: "\f40a";
}
.fa-vimeo-square:before {
  content: "\f194";
}
.fa-vimeo-v:before {
  content: "\f27d";
}
.fa-vine:before {
  content: "\f1ca";
}
.fa-vk:before {
  content: "\f189";
}
.fa-vnv:before {
  content: "\f40b";
}
.fa-vuejs:before {
  content: "\f41f";
}
.fa-watchman-monitoring:before {
  content: "\e087";
}
.fa-waze:before {
  content: "\f83f";
}
.fa-weebly:before {
  content: "\f5cc";
}
.fa-weibo:before {
  content: "\f18a";
}
.fa-weixin:before {
  content: "\f1d7";
}
.fa-whatsapp:before {
  content: "\f232";
}
.fa-whatsapp-square:before {
  content: "\f40c";
}
.fa-whmcs:before {
  content: "\f40d";
}
.fa-wikipedia-w:before {
  content: "\f266";
}
.fa-windows:before {
  content: "\f17a";
}
.fa-wirsindhandwerk:before,
.fa-wsh:before {
  content: "\e2d0";
}
.fa-wix:before {
  content: "\f5cf";
}
.fa-wizards-of-the-coast:before {
  content: "\f730";
}
.fa-wodu:before {
  content: "\e088";
}
.fa-wolf-pack-battalion:before {
  content: "\f514";
}
.fa-wordpress:before {
  content: "\f19a";
}
.fa-wordpress-simple:before {
  content: "\f411";
}
.fa-wpbeginner:before {
  content: "\f297";
}
.fa-wpexplorer:before {
  content: "\f2de";
}
.fa-wpforms:before {
  content: "\f298";
}
.fa-wpressr:before {
  content: "\f3e4";
}
.fa-xbox:before {
  content: "\f412";
}
.fa-xing:before {
  content: "\f168";
}
.fa-xing-square:before {
  content: "\f169";
}
.fa-y-combinator:before {
  content: "\f23b";
}
.fa-yahoo:before {
  content: "\f19e";
}
.fa-yammer:before {
  content: "\f840";
}
.fa-yandex:before {
  content: "\f413";
}
.fa-yandex-international:before {
  content: "\f414";
}
.fa-yarn:before {
  content: "\f7e3";
}
.fa-yelp:before {
  content: "\f1e9";
}
.fa-yoast:before {
  content: "\f2b1";
}
.fa-youtube:before {
  content: "\f167";
}
.fa-youtube-square:before {
  content: "\f431";
}
.fa-zhihu:before {
  content: "\f63f";
}
:host,
:root {
  --fa-font-regular: normal 400 1em/1 "Font Awesome 6 Free";
}
@font-face {
  font-family: "Font Awesome 6 Free";
  font-style: normal;
  font-weight: 400;
  font-display: block;
  src: url(https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/webfonts/fa-regular-400.woff2)
      format("woff2"),
    url(https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/webfonts/fa-regular-400.ttf)
      format("truetype");
}
.fa-regular,
.far {
  font-family: "Font Awesome 6 Free";
  font-weight: 400;
}
:host,
:root {
  --fa-font-solid: normal 900 1em/1 "Font Awesome 6 Free";
}
@font-face {
  font-family: "Font Awesome 6 Free";
  font-style: normal;
  font-weight: 900;
  font-display: block;
  src: url(https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/webfonts/fa-solid-900.woff2)
      format("woff2"),
    url(https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/webfonts/fa-solid-900.ttf)
      format("truetype");
}
.fa-solid,
.fas {
  font-family: "Font Awesome 6 Free";
  font-weight: 900;
}
@font-face {
  font-family: "Font Awesome 5 Brands";
  font-display: block;
  font-weight: 400;
  src: url(https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/webfonts/fa-brands-400.woff2)
      format("woff2"),
    url(https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/webfonts/fa-brands-400.ttf)
      format("truetype");
}
@font-face {
  font-family: "Font Awesome 5 Free";
  font-display: block;
  font-weight: 900;
  src: url(https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/webfonts/fa-solid-900.woff2)
      format("woff2"),
    url(https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/webfonts/fa-solid-900.ttf)
      format("truetype");
}
@font-face {
  font-family: "Font Awesome 5 Free";
  font-display: block;
  font-weight: 400;
  src: url(https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/webfonts/fa-regular-400.woff2)
      format("woff2"),
    url(https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/webfonts/fa-regular-400.ttf)
      format("truetype");
}
@font-face {
  font-family: "FontAwesome";
  font-display: block;
  src: url(https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/webfonts/fa-solid-900.woff2)
      format("woff2"),
    url(https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/webfonts/fa-solid-900.ttf)
      format("truetype");
}
@font-face {
  font-family: "FontAwesome";
  font-display: block;
  src: url(https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/webfonts/fa-brands-400.woff2)
      format("woff2"),
    url(https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/webfonts/fa-brands-400.ttf)
      format("truetype");
}
@font-face {
  font-family: "FontAwesome";
  font-display: block;
  src: url(https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/webfonts/fa-regular-400.woff2)
      format("woff2"),
    url(https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/webfonts/fa-regular-400.ttf)
      format("truetype");
  unicode-range: u+f003, u+f006, u+f014, u+f016-f017, u+f01a-f01b, u+f01d,
    u+f022, u+f03e, u+f044, u+f046, u+f05c-f05d, u+f06e, u+f070, u+f087-f088,
    u+f08a, u+f094, u+f096-f097, u+f09d, u+f0a0, u+f0a2, u+f0a4-f0a7, u+f0c5,
    u+f0c7, u+f0e5-f0e6, u+f0eb, u+f0f6-f0f8, u+f10c, u+f114-f115, u+f118-f11a,
    u+f11c-f11d, u+f133, u+f147, u+f14e, u+f150-f152, u+f185-f186, u+f18e,
    u+f190-f192, u+f196, u+f1c1-f1c9, u+f1d9, u+f1db, u+f1e3, u+f1ea, u+f1f7,
    u+f1f9, u+f20a, u+f247-f248, u+f24a, u+f24d, u+f255-f25b, u+f25d,
    u+f271-f274, u+f278, u+f27b, u+f28c, u+f28e, u+f29c, u+f2b5, u+f2b7, u+f2ba,
    u+f2bc, u+f2be, u+f2c0-f2c1, u+f2c3, u+f2d0, u+f2d2, u+f2d4, u+f2dc;
}
@font-face {
  font-family: "FontAwesome";
  font-display: block;
  src: url(https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/webfonts/fa-v4compatibility.woff2)
      format("woff2"),
    url(https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/webfonts/fa-v4compatibility.ttf)
      format("truetype");
  unicode-range: u+f041, u+f047, u+f065-f066, u+f07d-f07e, u+f080, u+f08b,
    u+f08e, u+f090, u+f09a, u+f0ac, u+f0ae, u+f0b2, u+f0d0, u+f0d6, u+f0e4,
    u+f0ec, u+f10a-f10b, u+f123, u+f13e, u+f148-f149, u+f14c, u+f156, u+f15e,
    u+f160-f161, u+f163, u+f175-f178, u+f195, u+f1f8, u+f219, u+f250, u+f252,
    u+f27a;
}

    .row.d-flex.justify-content-center.align-items-center.h-100{
        display: flex;
        justify-content: center;
        align-items: center;
    }
</style>
</head>


<body>
    <section class="h-100 gradient-custom">
        <div class="container py-5 h-100">
          <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col-lg-10 col-xl-8">
              <div class="card" style="border-radius: 10px;">
                <div class="card-header px-4 logo">
                    <div class="header-logo d-flex justify-content-center">
                        <a href=""></a>
                    </div>
                  </div>
                <div class="card-header px-4 py-5">
                  <h5 class="text-muted mb-0">Cảm ơn bạn đã tin tưởng và đặt hàng bên chúng tôi, <span style="color: #1a2e83;">{{ $data['customer_name'] }}</span>!</h5>
                </div>
                <div class="card-body p-4">
                  <div class=" mb-4">
                    <p class="lead fw-normal mb-0" style="color: #1a2e83;">Thông tin đơn hàng</p>
                    <p class="small text-muted mb-0">Mã hóa đơn : {{$data['order']->id}}</p>
                    <p class="small text-muted mb-0">Ngày đặt hàng : {{$data['order']->created_date}}</p>
                  </div>

                  @php
                            $subTotal = 0;
                        @endphp
                        @foreach ($data['orderItems'] as $orderItem)
                            @php
                                $subTotal += $orderItem->total_price;
                            @endphp
                  <div class="card shadow-0 border mb-4">
                    <div class="card-body">
                      <div class="row">
                        <div class="col-md-6">
                            @php
                                            $featured_image = $orderItem->product->featured_image;
                                        @endphp
                          <img src="{{ asset("storage/uploads/$featured_image") }}"
                            class="img-fluid" alt="{{ $orderItem->product->name }}">
                        </div>
                        <div class="col-md-6">
                            
                            <div class="col-md-12 name-product">
                                <p class="text-muted mb-0">{{ $orderItem->product->name }}</p>
                              </div>

                              @if (!empty($mainProduct->origin))
                              <div class="col-md-12 color-product">
                                <p class="text-muted mb-0 small">Xuất xứ: {{ $orderItem->product->origin->name }}</p>
                              </div>
                              @endif

                              @if (!empty($mainProduct->configuration))
                              <div class="col-md-12 digital-product">
                                <p class="text-muted mb-0 small">Cấu hình: {{ $orderItem->product->configuration->name }}</p>
                              </div>
                              @endif
                              
                                    @if (!empty($mainProduct->feature))
                              <div class="col-md-12 digital-product">
                                <p class="text-muted mb-0 small">Tính năng: {{ $orderItem->product->feature->name }}</p>
                              </div>
                              @endif

                              <div class="col-md-12 quality-product">
                                <p class="text-muted mb-0 small">Số lượng: {{ $orderItem->qty }}</p>
                              </div>
                              <div class="col-md-12 price-product">
                                <p class="text-muted mb-0 small">Giá: {{ number_format($orderItem->total_price) }}đ</p>
                              </div>
                              <a href="{{ route('site.product.show', [$orderItem->product->slug]) }}" target="_blank" rel="noopener noreferrer nofollow">
                                <button class="detail-product">
                                    Chi tiết
                                </button>
                            </a>
                        </div>
                      </div>
                    </div>
                  </div>
                  @endforeach

                  <div class="payment">
                    <p class="lead fw-normal mb-0" style="color: #1a2e83;">THANH TOÁN</p>
                  </div>
                  <div class="d-flex justify-content-between pt-2">
                    <p class=" mb-0">Tạm tính</p>
                    <p class="text-muted mb-0">{{ number_format($subTotal) }}đ</p>
                  </div>
                  @php
                  $total_price = $subTotal;
              @endphp
                  <div class="d-flex justify-content-between pt-2">
                    <p class=" mb-0">Tổng tiền</p>
                    <p class="text-muted mb-0">{{ number_format($total_price) }}đ</p>
                  </div>
                </div>
                <div class="p-4 delivery">
                    <div class="delivery-title">
                        <p class="lead fw-normal mb-0" style="color: #1a2e83;">ĐỊA CHỈ NHẬN HÀNG</p>
                      </div>
                      <div class="d-flex justify-content-between pt-2 flex-wrap">
                        <p class=" mb-0">Tên người nhận</p>
                        <p class="text-muted mb-0">{{ $data['order']->shipping_fullname }}</p>
                      </div>
                      <div class="d-flex justify-content-between pt-2 flex-wrap">
                        <p class=" mb-0">Số điện thoại người nhận</p>
                        <p class="text-muted mb-0">{{ $data['order']->shipping_mobile }}</p>
                      </div>
                      <div class="d-flex justify-content-between pt-2 flex-wrap">
                        <p class=" mb-0">Đỉa chỉ</p>
                        <p class="text-muted mb-0">{{ $data['order']->shipping_housenumber_street . ', ' . $data['order']->ward->name . ', ' . $data['order']->ward->district->name . ', ' . $data['order']->ward->district->province->name }}</p>
                      </div>
                      <div class="d-flex justify-content-between pt-2 flex-wrap">
                        <p class=" mb-0">Thời gian giao hàng dự kiến</p>
                        <p class="text-muted mb-0">{{$data['order']->delivered_date}}</p>
                      </div>
                </div>
                <div class="card-footer border-0 px-4 py-5"
                  style="background-color: #1a2e83; ">
                  <h5 class="d-flex align-items-center justify-content-center text-white text-uppercase mb-0">Tổng tiền: <span class="h2 mb-0 ms-2">{{ number_format($total_price) }}đ</span></h5>
                </div>
                <div class="container-inner text-center p-4">
                    <div class="footer-menu">
                        <div class="footer-title lead fw-normal mb-0" >
                            <div class="title-contact">THÔNG TIN LIÊN HỆ</div>
                        </div>
                        <div class="article-social">
                            <a href="{{ $data['company']->facebook_url }}" class="item" target="_blank" rel="noopener noreferrer nofollow">
                                <i class="fa-brands fa-facebook"></i>
                            </a>
                            <a href="{{ $data['company']->twitter_url }}" class="item" target="_blank" rel="noopener noreferrer nofollow">
                                <i class="fa-brands fa-twitter"></i>
                            </a>
                            <a href="{{ $data['company']->youtube_url }}" class="item" target="_blank" rel="noopener noreferrer nofollow">
                                <i class="fa-brands fa-youtube"></i>
                            </a>

                        </div>
                        <div>
                            Email: {{ $data['company']->email }}
                        </div>
                        <div>
                            SDT: {{ $data['company']->hotline }}
                        </div>
                        
                        
                    </div>
                    <div class="footer-copyright text-center">
                        <span>Bản Quyền © 2022
                            <a href="{{ env('APP_URL') }}">{{ $data['company']->name }}</a>. Đã Đăng Ký
                            Bản Quyền.</span>
                    </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      
</body>
</html>