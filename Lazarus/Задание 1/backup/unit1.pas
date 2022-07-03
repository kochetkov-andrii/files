unit Unit1;

{$mode objfpc}{$H+}

interface

uses
  Classes, SysUtils, Forms, Controls, Graphics, Dialogs, StdCtrls;

type

  { TForm1 }

  TForm1 = class(TForm)
    Button1: TButton;
    Button2: TButton;
    Edit1: TEdit;
    Edit2: TEdit;
    Edit3: TEdit;
    Label1: TLabel;
    Label2: TLabel;
    procedure Button1Click(Sender: TObject);
    procedure Button2Click(Sender: TObject);
    procedure FormCreate(Sender: TObject);
    procedure Label1Click(Sender: TObject);
  private

  public

  end;

var
  Form1: TForm1;

implementation

{$R *.lfm}

{ TForm1 }

procedure TForm1.Label1Click(Sender: TObject);
begin

end;

procedure TForm1.Button1Click(Sender: TObject);
var
s,d,k,ch:integer;
begin
k:=StrToInt(Edit1.Text);
s:=0;
d:=1;
ch:=1;
while (ch<=k) do
begin
s:=s*ch;
s:=d*ch;
ch:=ch+1;

Edit2.Text:=IntToStr(s)
end;
Edit3.Text:=IntToStr(d)
end;


procedure TForm1.Button2Click(Sender: TObject);
begin
Edit1.Text:='';
Edit2.Text:='';
Edit3.Text:='';
end;

procedure TForm1.FormCreate(Sender: TObject);
begin

end;

end.

