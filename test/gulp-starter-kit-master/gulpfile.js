const startBtn = document.querySelector("#start");
const stopBtn = document.querySelector("#stop");
const wrapper = document.querySelector(".wrapper")

function stopDefAction(evt) {
    if (evt.target.classList.contains("btn")) {
        evt.preventDefault();
    }
}

wrapper.addEventListener('click', stopDefAction);
startBtn.addEventListener('click', start);
stopBtn.addEventListener('click', stop);

class Timer {
    constructor() {
        this.start = 0;
        this.stop = 0;
    }
 

    start() {
        this.start = new Date();
    }
    stop() {
        this.stop = new Date();
    }
    getTime() {
        this.interval = () => this.stop - this.start;
        return this.interval;
        console.log(this.interval);
    }
}
const stopwatch = new Timer();
function start(evt) {
    stopwatch.start();
}

function stop(evt) {
    stopwatch.stop();
    stopwatch.getTime();
    console.log(stopwatch);
}
