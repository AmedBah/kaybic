<!-- Africa Coverage Section -->
<div class="container py-5">
    <div class="row">
        <div class="col-12 text-center mb-5">
            <div class="appear-animation" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="0">
                <span class="badge bg-gradient-light-primary-rgba-20 text-secondary rounded-pill text-uppercase font-weight-semibold text-2-5 px-3 py-2 px-4 mb-4"><span class="d-inline-flex py-1 px-2">Couverture Géographique</span></span>
            </div>
            <div class="appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200">
                <h2 class="text-9 text-lg-12 font-weight-semibold line-height-1 mb-4">Nos API couvrent toute l'Afrique de l'Ouest</h2>
            </div>
            <div class="appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="400">
                <p class="text-3-5 mb-0">KAYBIC AFRICA connecte les entreprises aux principaux opérateurs Mobile Money dans 7 pays d'Afrique</p>
            </div>
        </div>
    </div>
    
    <div class="row align-items-center">
        <!-- Carte de l'Afrique -->
        <div class="col-lg-8 mb-5 mb-lg-0">
            <div class="appear-animation" data-appear-animation="fadeInLeftShorter" data-appear-animation-delay="600">
                <div class="position-relative">
                    <!-- Conteneur pour la carte JSChart -->
                    <div id="chartDiv" style="max-width: 500px; height: 500px; margin: 0px auto;">
                        <!-- La carte sera générée ici par JSChart -->
                    </div>
                    
                    <!-- Légende -->
                    <div class="mt-4">
                        <div class="row">
                            <div class="col-6">
                                <div class="d-flex align-items-center mb-2">
                                    <div class="bg-success rounded-circle me-2" style="width: 16px; height: 16px;"></div>
                                    <span class="text-2">Pays couverts</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Statistiques et informations -->
        <div class="col-lg-4">
            <div class="appear-animation" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="800">
                <!-- Cartes des pays avec drapeaux -->
                <div class="mt-4">
                    <h5 class="font-weight-bold mb-3">Pays couverts :</h5>
                    <div class="row g-2" id="countryCards">
                        <!-- Généré par JavaScript -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
.africa-map-container {
    background: transparent;
    border: 2px solid #dee2e6;
    transition: all 0.3s ease;
}

.africa-map-container:hover {
    border-color: #007bff;
    box-shadow: 0 5px 15px rgba(0,123,255,0.1);
}

.country-item {
    opacity: 0;
    transform: translateX(-20px);
    transition: all 0.5s ease;
}

.country-item.animate {
    opacity: 1;
    transform: translateX(0);
}

.country-card {
    background: #fff;
    border: 2px solid #e9ecef;
    border-radius: 8px;
    padding: 8px;
    text-align: center;
    cursor: pointer;
    transition: all 0.3s ease;
    box-shadow: 0 2px 6px rgba(0,0,0,0.06);
    opacity: 0;
    transform: translateY(20px);
}

.country-card.animate {
    opacity: 1;
    transform: translateY(0);
}

.country-card:hover {
    border-color: #28a745;
    box-shadow: 0 4px 15px rgba(40, 167, 69, 0.2);
    transform: translateY(-3px);
}

.country-card.selected {
    border-color: #28a745 !important;
    background: linear-gradient(135deg, #28a745 0%, #20c997 100%) !important;
    color: white !important;
    box-shadow: 0 6px 20px rgba(40, 167, 69, 0.3) !important;
}

.country-flag {
    width: 40px;
    height: 30px;
    margin: 0 auto 8px auto;
    display: block;
    object-fit: cover;
    border-radius: 4px;
    box-shadow: 0 2px 4px rgba(0,0,0,0.1);
}

.country-name {
    font-size: 0.75rem;
    font-weight: 600;
    line-height: 1.2;
}

.country-list-item.selected {
    background-color: #28a745 !important;
    color: white !important;
    font-weight: bold !important;
    border-radius: 8px;
    transform: translateX(8px) !important;
}

.country-list-item:hover {
    background-color: #f8f9fa;
    border-radius: 8px;
    box-shadow: 0 2px 4px rgba(0,0,0,0.1);
}

@media (max-width: 991px) {
    .africa-map-container {
        height: 400px !important;
    }
}

@media (max-width: 768px) {
    .africa-map-container {
        height: 350px !important;
    }
    
    .country-card {
        padding: 6px;
    }
    
    .country-flag {
        width: 32px;
        height: 24px;
    }
    
    .country-name {
        font-size: 0.7rem;
    }
}
</style>

<!-- Inclure JSChart avec le module Maps -->
<script src="https://code.jscharting.com/latest/jscharting.js"></script>
<script src="https://code.jscharting.com/latest/modules/maps.js"></script>

<script>
document.addEventListener('DOMContentLoaded', function() {
    let chart = null;
    let selectedCountry = null;

    const coveredCountries = ['CI', 'BJ', 'SN', 'BF', 'CM', 'TG', 'ML'];

    const countryData = {
        'CI': { name: 'Côte d\'Ivoire', flag: 'ci.png' },
        'BJ': { name: 'Bénin', flag: 'bn.png' },
        'SN': { name: 'Sénégal', flag: 'sn.png' },
        'BF': { name: 'Burkina Faso', flag: 'bf.png' },
        'CM': { name: 'Cameroun', flag: 'cmr.png' },
        'TG': { name: 'Togo', flag: 'tg.png' },
        'ML': { name: 'Mali', flag: 'ml.png' }
    };

    // Créer la carte avec votre configuration
    function createChart() {
        chart = JSC.chart('chartDiv', { 
            debug: true, 
            type: 'map', 
            title: { label_text: 'Couverture KAYBIC AFRICA' }, 
            legend_visible: false, 
            defaultPoint: {
                tooltip: '%name',
                outline_color: '#ffffff',
                outline_width: 1,
                color: '#BCBBBB',
                events: {
                    click: function() {
                        const countryCode = this.options('map');
                        if (coveredCountries.includes(countryCode)) {
                            selectCountryFromCards(countryCode);
                        }
                    }
                }
            },
            series: [
                {
                    name: 'Pays couverts',
                    map: 'africa',
                    points: coveredCountries.map(countryCode => ({
                        map: countryCode,
                        name: countryData[countryCode].name,
                        status: 'Couvert par KAYBIC',
                        color: '#28a745',
                        outline_color: '#ffffff',
                        outline_width: 2,
                        tooltip: '%name<br><b>%status</b>'
                    }))
                }
            ],
            toolbar_visible: false,
            navigation_visible: false
        });
    }

    function generateCountryCards() {
        const cardsContainer = document.getElementById('countryCards');
        
        Object.entries(countryData).forEach(([countryCode, countryInfo], index) => {
            const cardDiv = document.createElement('div');
            cardDiv.className = 'col-6 mb-3';
            
            const card = document.createElement('div');
            card.className = 'country-card country-item';
            card.setAttribute('data-country-code', countryCode);
            card.style.transitionDelay = `${index * 0.1}s`;
            
            card.innerHTML = `
                <img src="/img/pays/${countryInfo.flag}" alt="${countryInfo.name}" class="country-flag" loading="lazy">
                <div class="country-name">${countryInfo.name}</div>
            `;
            
            card.addEventListener('click', () => selectCountryFromCards(countryCode));
            
            cardDiv.appendChild(card);
            cardsContainer.appendChild(cardDiv);
        });
        
        setTimeout(() => {
            document.querySelectorAll('.country-item').forEach(item => {
                item.classList.add('animate');
            });
        }, 1000);
    }

    function selectCountryFromCards(countryCode) {
        const selectedCard = document.querySelector(`[data-country-code="${countryCode}"]`);
        const isAlreadySelected = selectedCard && selectedCard.classList.contains('selected');
        
        document.querySelectorAll('.country-card').forEach(card => {
            card.classList.remove('selected');
        });
        
        if (isAlreadySelected) {
            selectedCountry = null;
            resetMapColors();
        } else {
            if (selectedCard) {
                selectedCard.classList.add('selected');
            }
            highlightCountryOnMap(countryCode);
            selectedCountry = countryCode;
        }
    }
    
    function resetMapColors() {
        if (chart) {
            const series = chart.series('Pays couverts');
            if (series) {
                series.points().forEach(point => {
                    point.options({
                        color: '#28a745',
                        outline_color: '#ffffff',
                        outline_width: 2
                    });
                });
            }
        }
    }

    function highlightCountryOnMap(countryCode) {
        if (chart) {
            const series = chart.series('Pays couverts');
            if (series) {
                series.points().forEach(point => {
                    const pointCountryCode = point.options('map');
                    const isSelected = pointCountryCode === countryCode;
                    
                    point.options({
                        color: isSelected ? '#ff6b35' : '#28a745',
                        outline_color: isSelected ? '#dc3545' : '#ffffff',
                        outline_width: isSelected ? 3 : 2
                    });
                });
            }
        }
    }

    try {
        createChart();
        generateCountryCards();
    } catch (error) {
        console.error('Erreur lors de l\'initialisation de la carte:', error);
        document.getElementById('chartDiv').innerHTML = '<div class="text-center p-5 text-danger"><i class="fas fa-exclamation-triangle me-2"></i>Erreur de chargement de la carte</div>';
    }
});
</script>
