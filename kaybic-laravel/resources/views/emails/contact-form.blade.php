<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Nouvelle demande de consultation</title>
    <style>
        body { 
            font-family: Arial, sans-serif; 
            line-height: 1.6; 
            color: #333; 
            margin: 0;
            padding: 0;
        }
        .container { 
            max-width: 600px; 
            margin: 0 auto; 
            padding: 20px; 
        }
        .header { 
            background-color: #d24a4a; 
            color: white; 
            padding: 20px; 
            text-align: center; 
            border-radius: 8px 8px 0 0;
        }
        .header h2 {
            margin: 0;
            font-size: 24px;
        }
        .header p {
            margin: 5px 0 0 0;
            font-size: 14px;
            opacity: 0.9;
        }
        .content { 
            padding: 30px 20px; 
            background-color: #f9f9f9; 
            border-radius: 0 0 8px 8px;
        }
        .field { 
            margin-bottom: 20px; 
        }
        .label { 
            font-weight: bold; 
            color: #555; 
            font-size: 14px;
            text-transform: uppercase;
            letter-spacing: 0.5px;
        }
        .value { 
            margin-top: 8px; 
            padding: 12px 15px; 
            background-color: white; 
            border-left: 4px solid #d24a4a; 
            border-radius: 4px;
            font-size: 16px;
        }
        .footer {
            margin-top: 30px;
            padding-top: 20px;
            border-top: 1px solid #ddd;
            text-align: center;
            color: #666;
            font-size: 12px;
        }
        .badge {
            display: inline-block;
            background-color: #d24a4a;
            color: white;
            padding: 4px 8px;
            border-radius: 4px;
            font-size: 11px;
            font-weight: bold;
            text-transform: uppercase;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <h2>🎯 Nouvelle Demande de Consultation</h2>
            <p>KAYBIC AFRICA - Solutions Mobile Money</p>
        </div>
        
        <div class="content">
            <p style="font-size: 16px; margin-bottom: 25px; color: #333;">
                <span class="badge">URGENT</span> Une nouvelle demande de consultation gratuite a été soumise via le site web.
            </p>
            
            <div class="field">
                <div class="label">👤 Nom complet</div>
                <div class="value">{{ $data['name'] }}</div>
            </div>
            
            <div class="field">
                <div class="label">📧 Adresse e-mail</div>
                <div class="value">
                    <a href="mailto:{{ $data['email'] }}" style="color: #d24a4a; text-decoration: none;">
                        {{ $data['email'] }}
                    </a>
                </div>
            </div>
            
            <div class="field">
                <div class="label">📱 Téléphone</div>
                <div class="value">
                    <a href="tel:{{ $data['phone'] }}" style="color: #d24a4a; text-decoration: none;">
                        {{ $data['phone'] }}
                    </a>
                </div>
            </div>
            
            <div class="field">
                <div class="label">🏢 Entreprise</div>
                <div class="value">{{ $data['company'] }}</div>
            </div>
            
            <div class="field">
                <div class="label">🏭 Secteur d'activité</div>
                <div class="value">{{ $data['industry'] }}</div>
            </div>
            
            <div class="field">
                <div class="label">💬 Message / Besoins</div>
                <div class="value">{{ nl2br(e($data['message'])) }}</div>
            </div>
            
            <div style="background-color: #e8f4f8; padding: 15px; border-radius: 6px; margin-top: 25px;">
                <h4 style="margin: 0 0 10px 0; color: #2c5aa0;">🎯 Actions recommandées :</h4>
                <ul style="margin: 0; padding-left: 20px; color: #555;">
                    <li>Répondre dans les 24h (engagement de service)</li>
                    <li>Proposer un rendez-vous téléphonique</li>
                    <li>Préparer une présentation personnalisée</li>
                    <li>Identifier les besoins spécifiques Mobile Money</li>
                </ul>
            </div>
            
            <div class="footer">
                <p>
                    📅 Envoyé le {{ now()->format('d/m/Y à H:i') }} depuis le site web KAYBIC AFRICA<br>
                    🌐 <a href="https://kaybicafrica.com" style="color: #d24a4a;">kaybicafrica.com</a>
                </p>
            </div>
        </div>
    </div>
</body>
</html>
