from django.db import models

# Create your models here.


class KategoriaTovara(models.Model):
    class Meta:
        verbose_name = 'Категория товара'
        verbose_name_plural = 'Категория товаров'

    nazvanie = models.CharField('Название категории товара', max_length=255)
    img = models.ImageField(verbose_name='Изображение', null=True, blank=True)

    def __str__(self):
        return self.nazvanie


class Tovar(models.Model):
    class Meta:
        verbose_name = 'Товар'
        verbose_name_plural = 'Товары'

    nazvanie = models.CharField('Название товара', max_length=255,)
    na_glavnuy = models.BooleanField('Выводить на главной', default=False)
    price = models.FloatField('Цена', default=0)
    opisanie = models.TextField(verbose_name='Описание', null=True, blank=True)
    kategoria_tovara = models.ForeignKey(KategoriaTovara, verbose_name='Категория товара', on_delete=models.CASCADE, related_name='tovari_v_kategorii')

    img = models.ImageField(verbose_name='Изображение', null=True, blank=True)

    def __str__(self):
        return self.nazvanie


class KategoriaUslug(models.Model):
    class Meta:
        verbose_name = 'Категория услуг'
        verbose_name_plural = 'Категория услуг'

    nazvanie = models.CharField('Название категории услуг', max_length=255)

    def __str__(self):
        return self.nazvanie


class Usluga(models.Model):
    class Meta:
        verbose_name = 'Услуга'
        verbose_name_plural = 'Услуги'

    nazvanie = models.CharField('Название услуги', max_length=255, )
    na_glavnuy = models.BooleanField('Выводить на главной', default=False)
    price = models.FloatField('Цена', default=0)
    opisanie = models.TextField(verbose_name='Описание', null=True, blank=True)
    kategoria_uslug = models.ForeignKey(KategoriaUslug,
                                        verbose_name='Категория услуг',
                                        on_delete=models.CASCADE,
                                        related_name='uslugi_kategorii'

                                        )

    img = models.ImageField(verbose_name='Изображение', null=True, blank=True)

    def __str__(self):
        return self.nazvanie


class Page(models.Model):
    class Meta:
        verbose_name = 'Страница'
        verbose_name_plural = 'Страницы'

    nazvanie = models.CharField('Название страницы', max_length=255, )
    v_shapku = models.BooleanField('Выводить в шапку', default=False)
    text = models.TextField(verbose_name='Текст страницы', null=True, blank=True)

    def __str__(self):
        return self.nazvanie
