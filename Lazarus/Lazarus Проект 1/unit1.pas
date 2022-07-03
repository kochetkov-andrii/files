unit Unit1;

{$mode objfpc}{$H+}

interface

uses
  Classes, SysUtils, Forms, Controls, Graphics, Dialogs, StdCtrls;

type

  { TForm1 }

  TForm1 = class(TForm)
    Button1: TButton;
    Edit1: TEdit;
    Label1: TLabel;
    procedure Button1Click(Sender: TObject);
  private

  public

  end;

var
  Form1: TForm1;

implementation

{$R *.lfm}

{ TForm1 }

procedure TForm1.Button1Click(Sender: TObject);
var a,s: real; n: integer;
begin
  a:=StrToFloat(Edit1.Text);
  s:=a; n:=1;
  while s<= 100 do
begin
a:=a+3;
s:=s+a;
n:=n+1;

end;
Label1.Caption:=IntToStr(n);
end;
end.

