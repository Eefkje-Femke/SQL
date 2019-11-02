using System;
using System.Collections;
using System.Collections.Generic;
using System.Text;
namespace Voetbal
{
    #region Voetballers
    public class Voetballers
    {
        #region Member Variables
        protected int _VoetbalID;
        protected string _Achternaam;
        protected string _Voornaam;
        protected string _Contributie;
        protected string _Elftalcode;
        #endregion
        #region Constructors
        public Voetballers() { }
        public Voetballers(string Achternaam, string Voornaam, string Contributie, string Elftalcode)
        {
            this._Achternaam=Achternaam;
            this._Voornaam=Voornaam;
            this._Contributie=Contributie;
            this._Elftalcode=Elftalcode;
        }
        #endregion
        #region Public Properties
        public virtual int VoetbalID
        {
            get {return _VoetbalID;}
            set {_VoetbalID=value;}
        }
        public virtual string Achternaam
        {
            get {return _Achternaam;}
            set {_Achternaam=value;}
        }
        public virtual string Voornaam
        {
            get {return _Voornaam;}
            set {_Voornaam=value;}
        }
        public virtual string Contributie
        {
            get {return _Contributie;}
            set {_Contributie=value;}
        }
        public virtual string Elftalcode
        {
            get {return _Elftalcode;}
            set {_Elftalcode=value;}
        }
        #endregion
    }
    #endregion
}