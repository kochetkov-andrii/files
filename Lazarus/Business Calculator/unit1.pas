unit Unit1;

{$mode objfpc}{$H+}

interface

uses
  Classes, SysUtils, Forms, Controls, Graphics, Dialogs, StdCtrls, ExtCtrls,
  Spin, Buttons;

type

  { TForm1 }

  TForm1 = class(TForm)
    Button1: TButton;
    Button2: TButton;
    ComboBox1: TComboBox;
    Label1: TLabel;
    Label2: TLabel;
    Label3: TLabel;
    Label4: TLabel;
    Label5: TLabel;
    Label6: TLabel;
    SpinEdit1: TSpinEdit;
    SpinEdit2: TSpinEdit;
    procedure Button1Click(Sender: TObject);
    procedure Button2Click(Sender: TObject);
    procedure ComboBox1KeyPress(Sender: TObject; var Key: char);
    procedure ComboBox2KeyPress(Sender: TObject; var Key: char);
    procedure ComboBox3KeyPress(Sender: TObject; var Key: char);
    procedure FormCreate(Sender: TObject);
    procedure Label6Click(Sender: TObject);
    procedure SpinEdit2Change(Sender: TObject);
  private

  public

  end;

var
  Form1: TForm1;

implementation

{$R *.lfm}

{ TForm1 }

procedure TForm1.ComboBox1KeyPress(Sender: TObject; var Key: char);
begin
  key:=Chr(0);
end;

procedure TForm1.Button2Click(Sender: TObject);
begin
  ComboBox1.Text:='Бизнес';
  SpinEdit1.Text:='0';
  SpinEdit2.Text:='0';
  Label6.Caption:=' ';
end;


procedure TForm1.Button1Click(Sender: TObject);
var a,b,d,y,z,x,p: integer;
summ: integer;

begin
if ComboBox1.ItemIndex=0 then a:=167000;  //ИП   31к//
if ComboBox1.ItemIndex=1 then a:=167000;  //Магазин цветов   31к//
if ComboBox1.ItemIndex=2 then a:=226000;  //Частная Парковка   37к//
if ComboBox1.ItemIndex=3 then a:=292000;  //Продуктовый Магазин   56к//
if ComboBox1.ItemIndex=4 then a:=325000;  //Аптека   75к//
if ComboBox1.ItemIndex=5 then a:=481000;  //Магнит   83к//
if ComboBox1.ItemIndex=6 then a:=500000;  //СТО   100к//
if ComboBox1.ItemIndex=7 then a:=565000;  //Кафе    95к//
if ComboBox1.ItemIndex=8 then a:=558000;  //Частный Склад   95к//
if ComboBox1.ItemIndex=9 then a:=700000;  //Апарт-Отель Горки   118к//
if ComboBox1.ItemIndex=10 then a:=850000;  //АЗС   150к//
if ComboBox1.ItemIndex=11 then a:=844000;  //Школа Танцев   141к//
if ComboBox1.ItemIndex=12 then a:=837000;  //Тюнинг Стандарт   141к//
if ComboBox1.ItemIndex=13 then a:=837000;  //Апарт-Отель НСК   141к//
if ComboBox1.ItemIndex=14 then a:=837000;  //Автобусный парк   141к//
if ComboBox1.ItemIndex=15 then a:=890000;  //Транспортный Сервис   150к//
if ComboBox1.ItemIndex=16 then a:=1010000;  //Автосалон "Лада"   180к//
if ComboBox1.ItemIndex=17 then a:=1255000;  //Гипермаркет "Лента"   210к//
if ComboBox1.ItemIndex=18 then a:=640000;  //Ресторан в парке   120к//
if ComboBox1.ItemIndex=19 then a:=996000;  //Апарт-Отель МСК   170к//
if ComboBox1.ItemIndex=20 then a:=1077000;  //Кинотеатр   183к//
if ComboBox1.ItemIndex=21 then a:=1133000;  //Отель Горки   191к//
if ComboBox1.ItemIndex=22 then a:=850000;  //Дом Книг   150к//
if ComboBox1.ItemIndex=23 then a:=1126000;  //Частная свалка   190к//
if ComboBox1.ItemIndex=24 then a:=1200000;  //Ресторан   200к//
if ComboBox1.ItemIndex=25 then a:=1325000;  //Автосалон "Toyota"   225к//
if ComboBox1.ItemIndex=26 then a:=1430000;  //Тюнинг   240к//
if ComboBox1.ItemIndex=27 then a:=1490000;  //Стрип-Клуб   240к//
if ComboBox1.ItemIndex=28 then a:=1850000;  //Автосалон "Mercedes"   300к//
if ComboBox1.ItemIndex=29 then a:=1529000;  //Стройка   260к//
if ComboBox1.ItemIndex=30 then a:=1850000;  //ТЦ "Весна"   300к//
if ComboBox1.ItemIndex=31 then a:=1681000;  //Аэропорт ГРК   286к//
if ComboBox1.ItemIndex=32 then a:=1750000;  //Торговый центр   300к//
if ComboBox1.ItemIndex=33 then a:=1820000;  //Автосалон "Lamborghini"   310к//
if ComboBox1.ItemIndex=34 then a:=1890000;  //Частная Школа   320к//
if ComboBox1.ItemIndex=35 then a:=1975000;  //ТЦ "Взрослый мир"   325к//
if ComboBox1.ItemIndex=36 then a:=1998000;  //ТЦ "Плаза"   339к//
if ComboBox1.ItemIndex=37 then a:=1960000;  //Банк   330к//
if ComboBox1.ItemIndex=39 then a:=2072000;  //Отель Марриотт   350к//
if ComboBox1.ItemIndex=40 then a:=2190000;  //Гостиница НСК   370к//
if ComboBox1.ItemIndex=41 then a:=2260000;  //Ресторан Спасский   380к//
if ComboBox1.ItemIndex=42 then a:=2260000;  //ТЦ Метрополис   380к//
if ComboBox1.ItemIndex=43 then a:=2519000;  //Гостинница Кастель   417к//
if ComboBox1.ItemIndex=44 then a:=2490000;  //Никопольский пассаж   420к//
if ComboBox1.ItemIndex=45 then a:=2874000;  //Завод   482к//
if ComboBox1.ItemIndex=46 then a:=2930000;  //Детский ГУМ   490к//
if ComboBox1.ItemIndex=47 then a:=3192000;  //Московский порт   540к//
if ComboBox1.ItemIndex=48 then a:=3600000;  //ТЦ ЦУМ   600к//
if ComboBox1.ItemIndex=59 then a:=3439000;  //Гистинница Украина   623к//
if ComboBox1.ItemIndex=50 then a:=3990000;  //ТЦ ГУМ  650к//
d:=StrToInt(SpinEdit1.Text);   //y-Это второй спинэдит       d-Это первый спинэдит       a-переменные с комбобокса//
y:=StrToInt(SpinEdit2.Text);//0.01//
summ:=a*y;                                  //   a,b,d,y,z,x,summ  //
Label6.Caption:=IntToStr(summ);
end;

procedure TForm1.ComboBox2KeyPress(Sender: TObject; var Key: char);
begin
  key:=Chr(0);
end;

procedure TForm1.ComboBox3KeyPress(Sender: TObject; var Key: char);
begin
  key:=Chr(0);
end;

procedure TForm1.FormCreate(Sender: TObject);
begin

end;

procedure TForm1.Label6Click(Sender: TObject);
begin

end;

procedure TForm1.SpinEdit2Change(Sender: TObject);
begin

end;

end.
