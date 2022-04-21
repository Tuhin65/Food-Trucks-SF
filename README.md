<div id="top"></div>


<!-- PROJECT SHIELDS -->
<!--
*** I'm using markdown "reference style" links for readability.
*** Reference links are enclosed in brackets [ ] instead of parentheses ( ).
*** See the bottom of this document for the declaration of the reference variables
*** for contributors-url, forks-url, etc. This is an optional, concise syntax you may use.
*** https://www.markdownguide.org/basic-syntax/#reference-style-links
-->
[![Contributors][contributors-shield]][contributors-url]
[![Forks][forks-shield]][forks-url]
[![Stargazers][stars-shield]][stars-url]
[![Issues][issues-shield]][issues-url]
[![MIT License][license-shield]][license-url]
[![LinkedIn][linkedin-shield]][linkedin-url]



<!-- PROJECT LOGO -->
<br />
<div align="center">
  <a href="https://github.com/Tuhin65/Food-Trucks-SF">
    Food-Trucks-SF
  </a>

<h3 align="center">Food Trucks API</h3>

  <p align="center">
    An api to find locations and information about food trucks in San Francisco.
    <br />
    <a href="https://github.com/Tuhin65/Food-Trucks-SF"><strong>Explore the docs »</strong></a>
    <br />
    <br />
    <a href="https://github.com/Tuhin65/Food-Trucks-SF">View Demo</a>
    ·
    <a href="https://github.com/Tuhin65/Food-Trucks-SF/issues">Report Bug</a>
    ·
    <a href="https://github.com/Tuhin65/Food-Trucks-SF/issues">Request Feature</a>
  </p>
</div>



<!-- TABLE OF CONTENTS -->
<details>
  <summary>Table of Contents</summary>
  <ol>
    <li>
      <a href="#about-the-project">About The Project</a>
      <ul>
        <li><a href="#built-with">Built With</a></li>
      </ul>
    </li>
    <li>
      <a href="#getting-started">Getting Started</a>
      <ul>
        <li><a href="#installation">Installation</a></li>
      </ul>
    </li>
    <li><a href="#usage">Usage</a></li>
    <li><a href="#license">License</a></li>
    <li><a href="#contact">Contact</a></li>
  </ol>
</details>



<!-- ABOUT THE PROJECT -->
## About The Project

Api  produced in laravel for assignement given by Estee Lauder.  Based on food truck licensing informition provided in San Franscisco open data.
Allows the user to find food trucks in zip codes or near particular latitude or longitudes.

<p align="right">(<a href="#top">back to top</a>)</p>



### Built With

* [Laravel](https://laravel.com)


<p align="right">(<a href="#top">back to top</a>)</p>



<!-- GETTING STARTED -->
## Getting Started

To get a local copy up and running follow these simple example steps.

### Installation

1. Clone the repo
   ```sh
   git clone https://github.com/Tuhin65/Food-Trucks-SF.git
   ```
2. Load application data
   ```sh
   cd appdata
   
   mysql -u root -p < locations.sql   
   ```


<p align="right">(<a href="#top">back to top</a>)</p>



<!-- USAGE EXAMPLES -->
## Usage

Use postman or other application to make calls on the api endpoints as follows:

1. View all food trucks
   ```sh
   /api/v1/locations 
   ```

2. View all food trucks in zip code (Available zip codes are )
   ```sh
   /api/v1/locations?zip=58   
   ```
    The zip codes with food trucks in San Fancisco are:

    54
55
56
57
58
64
308
309
310
28852
28853
28854
28855
28856
28857
28858
28859
28860
28861
28862
29490
29491
29492


3. View nearest 8 food trucks near a location
   ```sh
   /api/v1/locations/near?lon=-122.402978526686&lat=-122.402978526686
   ```



4. Get details of food truck by ID
   ```sh
   /api/v1/locations/5
   ```



<p align="right">(<a href="#top">back to top</a>)</p>





<!-- POTENTIAL FUTURE DEVELOPMENT -->
## POTENTIAL DEVELOPMENTS

With more time there is potential to create a front end that uses geo-location to make a web page or app that shows food trucks near your location.

Could be similar to one I developed to show property information: https://www.proviser.com/uk/house-prices/find-sold-prices

Which shows properies sold near the user (England and Wales only)

<p align="right">(<a href="#top">back to top</a>)</p>



<!-- LICENSE -->
## License

Distributed under the MIT License. See `LICENSE.txt` for more information.

<p align="right">(<a href="#top">back to top</a>)</p>



<!-- CONTACT -->
## Contact

Tuhin Reynolds-Imam - [Linkedin](https://www.linkedin.com/in/tuhin-reynolds-imam/) - tuhinimam@live.co.uk

Project Link: [https://github.com/Tuhin65/Food-Trucks-SF](https://github.com/Tuhin65/Food-Trucks-SF)

<p align="right">(<a href="#top">back to top</a>)</p>




<!-- MARKDOWN LINKS & IMAGES -->
<!-- https://www.markdownguide.org/basic-syntax/#reference-style-links -->
[contributors-shield]: https://img.shields.io/github/contributors/github_username/repo_name.svg?style=for-the-badge
[contributors-url]: https://github.com/github_username/repo_name/graphs/contributors
[forks-shield]: https://img.shields.io/github/forks/github_username/repo_name.svg?style=for-the-badge
[forks-url]: https://github.com/github_username/repo_name/network/members
[stars-shield]: https://img.shields.io/github/stars/github_username/repo_name.svg?style=for-the-badge
[stars-url]: https://github.com/github_username/repo_name/stargazers
[issues-shield]: https://img.shields.io/github/issues/github_username/repo_name.svg?style=for-the-badge
[issues-url]: https://github.com/github_username/repo_name/issues
[license-shield]: https://img.shields.io/github/license/github_username/repo_name.svg?style=for-the-badge
[license-url]: https://github.com/github_username/repo_name/blob/master/LICENSE.txt
[linkedin-shield]: https://img.shields.io/badge/-LinkedIn-black.svg?style=for-the-badge&logo=linkedin&colorB=555
[linkedin-url]: https://linkedin.com/in/linkedin_username
[product-screenshot]: images/screenshot.png
