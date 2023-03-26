# Bet App: 
Sorry for the bad design. First time using liveWire, AlpineJs with PHP and therefore i invested most of my time to digging into Documentations to implement the core logic rather than visually appealing look & feel part. Since i am a javascript developer, most of the logic is happening in x-init (alpineJs) layer. But i feel like its a common pitfall and might be a bad practice since it kinda made the code look dirty. I also used livewire components for checking data and forwarding events.

At first implementation i created Models for Game and Team, then forgot to use them in the components. Instead i just created javascript objects in (x-init) and saved them in localStorage. (please check browser console/application/localStorage)

P.S: Please press the refresh Team List button after adding team to see the latest added teams in the dropdownbox. 

## To run: 
<code>npm install
npm run dev 
php artisan serve
</code>

<p align="center">
<picture>
  <source media="(prefers-color-scheme: dark)" srcset="https://github.com/RecursiveVoid/bet/blob/main/betTest.gif?raw=true">
  <source media="(prefers-color-scheme: light)" srcset="https://github.com/RecursiveVoid/bet/blob/main/betTestl.gif?raw=true">
  <img alt="Overview of the startup of the webpage" src="https://github.com/RecursiveVoid/bet/blob/main/betTest.gif?raw=true">
</picture>
</p>

