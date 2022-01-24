const getData = () => {
  //   Get parent element of containers
  let parent = document.querySelector(".fit-box");
  //   Get children items (task info divs)
  let children = parent.children;
  let taskData = [];

  //   Loop through all children
  for (let index = 0; index < children.length; index++) {
    // TODO fetch specific task data
    const taskId = children[index].id;

    // Getting timer div reference
    let timer = document
      .getElementById(taskId)
      .getElementsByClassName("list-row-task-timer")[0];

    // Placeholder task info
    let taskInfo = {};
    if (index == 0) {
      taskInfo = {
        totalTime: 5000,
        startTime: null,
        msg: "cos",
      };
    } else {
      taskInfo = {
        totalTime: 100,
        startTime: 1642982065,
      };
    }

    // If smth goes wrong
    if (taskInfo.msg) {
      timer.innerHTML = "ERROR";
      continue;
    }

    let timeToDisplay =
      taskInfo.startTime !== null
        ? taskInfo.totalTime + (Date.now() / 1000 - taskInfo.startTime)
        : taskInfo.totalTime;

    // Setting initial timer value
    timer.innerHTML = getTimeString(timeToDisplay);

    //   IF startTime !==null setInterval
    if (taskInfo.startTime !== null) {
      startInterval(taskId, timeToDisplay);
    }
  }
};

const startInterval = (taskId, timeToDisplay) => {
  // Getting timer div reference
  let timer = document
    .getElementById(taskId)
    .getElementsByClassName("list-row-task-timer")[0];

  timer.value = timeToDisplay;

  //   Setting timer interval
  setInterval(() => {
    timer.innerHTML = getTimeString(timer.value + 1);
    timer.value += 1;
  }, 1000);
};

const getTimeString = (epoch_time) => {
  // Seconds
  let time = new Date(epoch_time).getTime();
  //   Get amount of hours
  const hours = parseInt(time / 3600);
  //   Substract number of equivalent seconds
  time -= hours * 3600;
  //   Get amount of minutes
  const minutes = parseInt(time / 60);
  //   Substract number of equivalent seconds
  time -= minutes * 60;
  //   Get amount of seconds
  let seconds = parseInt(time);
  //   Adding 0 in front of seconds to have 2 digits
  if (seconds < 10) {
    seconds = `0${seconds}`;
  }

  //   Creating response String
  let result = "";
  hours !== 0 ? (result += `${hours}:`) : null;
  minutes !== 0 ? (result += `${minutes}:`) : null;
  result += `${seconds}`;
  return result;
};
