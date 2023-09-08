# Web Scraping with RoachPHP - Sample Code

This repository contains the sample code for the article [Web Scraping with RoachPHP](https://codewithkyrian.com/p/roachphp-mastering-web-scraping-with-php). In the article, we explore the basics of web scraping with PHP and [RoachPHP](https://github.com/roach-php/core), a powerful web scraping toolkit for PHP.

## Table of Contents

- [Getting Started](#getting-started)
- [Prerequisites](#prerequisites)
- [Usage](#usage)
- [File Structure](#file-structure)
- [Contributing](#contributing)

## Getting Started

If you're interested in web scraping with PHP or want to follow along with the article, you can clone this repository to your local machine.

### Prerequisites

To run the code, you need:

- PHP installed on your system
- Composer installed (for managing dependencies)
- A basic understanding of PHP

### Usage

1. Clone this repository:

   ```bash
   git clone https://github.com/your-username/web-scraping-with-roachphp.git
   ```
2. Change into the project directory:

   ```bash
   cd web-scraping-with-roachphp
   ```
3. Install dependencies using Composer:

   ```bash
   composer install
   ```
4. Run the web scraping script:

   ```bash
   php index.php
   ```
5. Check the output in the `output` directory.

## File Structure

The file structure of this project is as follows:

```bash
web-scraping-with-roachphp/
├── src/
│   ├── Spiders/
│   │   ├── ImdbTopMoviesSpider.php
│   │   ├── OpenLibrarySpider.php
│   ├── Processors/
│   │   ├── CleanMovieTitle.php
├── output/
│   ├── trending-books.json
│   ├── top-movies.json
├── index.php
├── composer.json
├── README.md
```
- The `src/Spiders/` directory contains spider classes for web scraping.
- The `src/Processors/` directory contains item processors for data post-processing.
- The `output/` directory stores the scraped data in JSON format.
- `index.php` is the entry point of the script.

## Contributing

If you'd like to contribute or improve this code, feel free to open a pull request. Your contributions are welcome!