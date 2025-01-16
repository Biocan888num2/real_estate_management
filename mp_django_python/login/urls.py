from django.urls import path
from . import views

app_name = 'login'

urlpatterns = [
    path('login_en/', views.login_EN, name='login_english'),

    path('login_fr/', views.login_FR, name='login_french'),

    path('privacy_policy/', views.privacy_policy, name='privacy'),

    path('terms/', views.terms, name='terms'),

    path('confidentialité/', views.confidentialité, name='confidentialité'),

    path('conditions/', views.conditions, name='conditions')
]