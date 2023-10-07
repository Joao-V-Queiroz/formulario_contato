// cadastro-agendamento.js

document.addEventListener('livewire:load', function () {
    Livewire.on('addTimeSlot', function (dayOfWeek) {
        addNewTimeSlot(dayOfWeek);
    });
});

function addNewTimeSlot(dayOfWeek) {
    const originalDiv = document.querySelector(`#div-${dayOfWeek}`);
    const newDiv = originalDiv.cloneNode(true);
    document.querySelector('#div-container').appendChild(newDiv);
}
