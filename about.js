document.addEventListener('DOMContentLoaded', function () {
    var showTeamButton = document.getElementById('show-team-btn');
    var teamSection = document.getElementById('team-section');
    showTeamButton.addEventListener('click', function () {
        if (teamSection.style.display === 'none') {
            teamSection.style.display = 'block';
            showTeamButton.textContent = 'Hide Team';
        }
        else {
            teamSection.style.display = 'none';
            showTeamButton.textContent = 'Show Team';
        }
    });
});
