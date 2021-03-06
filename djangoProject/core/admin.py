from django.contrib import admin

# Register your models here.
from core.models import Usluga, KategoriaUslug, Tovar, KategoriaTovara


class TovarInline(admin.TabularInline):
    model = Tovar

class UslugaInline(admin.TabularInline):
    model = Usluga


@admin.register(KategoriaTovara)
class KategoriaTovaraAdmin(admin.ModelAdmin):
    inlines = [
        TovarInline,
    ]
    list_display = ('nazvanie',)

@admin.register(Tovar)
class TovarAdmin(admin.ModelAdmin):
    list_display = (
        'nazvanie',
        'na_glavnuy',
        'price',
        'opisanie',
        'kategoria_tovara',
    )

    list_editable = ['na_glavnuy',  'price', 'kategoria_tovara']

@admin.register(KategoriaUslug)
class KategoriaUslugAdmin(admin.ModelAdmin):
    inlines = [
        UslugaInline,
    ]
    list_display = ('nazvanie',)

@admin.register(Usluga)
class UslugaAdmin(admin.ModelAdmin):
    list_display = (
        'nazvanie',
        'na_glavnuy',
        'price',
        'opisanie',
        'kategoria_uslug',
    )

    list_editable = ['na_glavnuy',  'price', 'kategoria_uslug']