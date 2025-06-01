<script setup>
</script>

<template>
  <main>
    <div class="card-container">
      <div class="image-container">
        <h4 class="overlay-text">Noval Raihan Ramadhan</h4>
        <p class="overlay-text-subtitle">Information System</p>
        <img class="image" src="../assets/images/Noval_Raihan_Ramadhan_IT_Brawijayapreneur-removebg HD.png" alt="">
      </div>
      <div class="content">
        <div class="items">
          <div class="item">
            <h1>About</h1>
            <p>Information Systems student at Brawijaya University and aspiring game developer with experience in Unity
              and C#. Skilled in backend development using Laravel and Express.js, passionate about building immersive
              games and scalable web solutions. Always eager to innovate and take on new tech and gaming challenges.</p>
          </div>
          <div class="item">
            <h4>Age : 21</h4>
            <h4>Occupation : Student</h4>
            <h4>Location : Malang</h4>
          </div>
        </div>
        <div class="items">
          <div class="item">
            <h1>Education</h1>
            <h3>SMK Telkom Malang</h3>
            <h3>Universitas Brawijaya</h3>
          </div>
          <div class="item">
            <h1>Skills</h1>
            <ul>
              <li>Proficient in Back-End Programming</li>
              <li>Proficient in SQL for Database Querying</li>
              <li>Basic Knowledge of HTML and CSS</li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </main>
</template>

<style scoped>
@import url('https://fonts.googleapis.com/css2?family=Lacquer&family=Roboto:ital,wght@0,100..900;1,100..900&display=swap');
@import "tailwindcss";

p {
  font-size: 12px;
  text-align: justify;
  line-height: 1.2;
}

h1 {
  font-size: 24px;
  margin-bottom: 0;
}

h3 {
  margin: 20px 0 0 0;
}

.overlay-text {
  position: absolute;
  top: 20px;
  left: 50%;
  transform: translateX(-50%);
  white-space: nowrap;
  /* 🚫 Prevent line breaks */
  margin: 0;
  padding: 8px 16px;
  color: white;
  font-size: 20px;
  font-family: 'Roboto', cursive;
  font-weight: Bold;
  z-index: 2;
  border-bottom-left-radius: 8px;
  border-bottom-right-radius: 8px;
  text-align: center;
}

.overlay-text-subtitle {
  position: absolute;
  top: 55px;
  left: 50%;
  transform: translateX(-50%);
  white-space: nowrap;
  margin: 0;
  padding: 8px 16px;
  color: white;
  font-size: 16px;
  font-family: 'Roboto', cursive;
  font-weight: normal;
  z-index: 2;
  border-bottom-left-radius: 8px;
  border-bottom-right-radius: 8px;
  text-align: center;
}

.card-container {
  width: 1000px;
  height: 500px;
  margin: auto;
  display: flex;
  flex-direction: row;
  border-radius: 10px;
}

.image-container,
.content,
.upper,
.bottom {
  position: relative;
  z-index: 1;
  /* ensures solid background over stripes */
  border-radius: 10px;
}

.image-container {
  width: 300px;
  height: 480px;
  margin: 10px;
  overflow: hidden;
  border-radius: 10px;
  box-shadow:
    inset 2px 2px 4px rgba(255, 255, 255, 0.6),
    inset -2px -2px 4px rgba(255, 255, 255, 0.4),
    inset 2px -2px 4px rgba(0, 0, 0, 0.2),
    inset -2px 2px 4px rgba(0, 0, 0, 0.2);
  background-color: hsla(160, 100%, 37%, 1);
}

.image {
  width: 100%;
  height: 100%;
  transform: translateY(5%) scale(1.8);
  object-fit: cover;
  object-position: up;

}

.content {
  width: 690px;
  margin: 10px;
  border-radius: 10px;
  display: flex;
  flex-direction: column;
  gap: 20px;
  box-shadow:
    inset 2px 2px 4px rgba(255, 255, 255, 0.6),
    inset -2px -2px 4px rgba(255, 255, 255, 0.4),
    inset 2px -2px 4px rgba(0, 0, 0, 0.2),
    inset -2px 2px 4px rgba(0, 0, 0, 0.2);
  background-color: hsla(160, 100%, 37%, 1);
}

.items {
  width: 650px;
  height: 140px;
  margin: auto;
  display: flex;
  flex-direction: row;
  gap: 10px;
  border-radius: 10px;
}

.item {
  width: 100%;
  height: 100%;
  border-radius: 10px;
  margin-left: 20px;
  /* background-color: white; */
}
</style>
